
<form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <div class="carousel-item active">

        <div class="form-group">
            <label for="battleName">Battle Name:</label>
            <input type="text" name="battleName" class="form-control">
        </div>
        <div id="dynamicCheck">
            <input type="button" value="Add Trainer" onclick="createNewElement();" />
        </div>
        <input type="text" id="user-name">
        <div id="newElementId">New inputbox goes here:</div>
        <br>

        <script type="text/JavaScript">
        var a=true;
          function createNewElement() {
              // First create a DIV element.
            
            var txtNewInputBox = document.createElement('div');
            var x=document.getElementById("newElementId");
          
              // Then add the content (a new input box) of the element.
            txtNewInputBox.innerHTML = "<input type='text' id='user-name'>";
          
              // Finally put it where it is supposed to appear.

            if(a)
               {
                 x.appendChild(txtNewInputBox);
                 console.log("new id: ",x);
                 a=false;
                }
            else
            {
              console.log("new id: ",x);
              x.removeChild(x.childNodes[1]);
              
              console.log("a: "+ a);
              a=true;

            }
            
          }
          </script>
        <div class="form-group">
            <button class="login100-form-btn" type="submit" name="submit">
								Add Battle
							</button>
        </div>
    </div>

</form>

<script>
    // GLOBAL TEMP VAR TO HOLD AUTOCOMPLETE DATA
    var actemp = null;

    // AUTO-COMPLETE SETUP
    $(document).ready(function () {
      $(function() {
        
        $('#user-name').autocomplete({          
            source: function(request, response) {
                $.ajax({
                    type: "POST",
                    url: "searchPlayers.php",
                    data: {
                        term: request.term,
                        type: "user-all"
                    },
                    success: function(data) {
                        // Details to global temp
                        console.log("data is here: ", data);
                        actemp = data.details;
                        // Return display
                        response(data.display);
                    },
                    dataType: 'json',
                    minLength: 2,
                    delay: 100
                });
                
            },
            select: function(event, ui) {
                console.log("oser: " + ui.item.label);
                // Fill up other fields
                $('#user-name').val(ui.item.label);
                $('#user-email').val(actemp[ui.item.value]['email']);
                $('#user-tel').val(actemp[ui.item.value]['phone']);
                return false;
            }
        });
    });
});
    
</script>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('connection.php');
if(isset($_POST['submit']))
{
$battleName=$_POST['battleName'];

$sql="INSERT into battle(battleName) VALUES ('$battleName')";

$result = mysqli_query($con, $sql);
if($result)
{
  echo "<script type='text/javascript'>alert('Added');</script>";
  echo "<script type='text/javascript'> document.location = 'battles.php'; </script>";
}
else {
  echo "<script type='text/javascript'>alert('Not Added5');</script>";
  echo "<script type='text/javascript'> document.location = 'battles.php'; </script>";
}
}
 ?>