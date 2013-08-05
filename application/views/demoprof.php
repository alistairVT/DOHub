<html>
<head>
  <title>DOHub: Demographic Profile</title>
</head>

<?php
  include('bootstrapTop.php');
?>

<body>

<div id="wrap">
  <form action="<?php echo base_url() ?>view_controller/DemoGraphProf" method="POST" id="formbox" onsubmit="">
       <h1><div class="navbar-fixed-top"> Student's Demographic Profile
        </div></h1>
  <div class="maincontainer"> 


  <table>
    <tr>
      <td class="input">  First Name: </td>
      <td class="input"><input type="text" id = "fname" name="fname" placeholder = "First Name" maxlength="500"/></td>
    </tr>

    <tr>
      <td class="input"> Middle Name: </td>
      <td class="input"><input type="text" id = "mname" name="mname" placeholder = "Middle Name" maxlength="500"/></td>
    </tr>

    <tr>
      <td class="input">Last Name: </td>
      <td class="input"> <input type="text" id = "lname" name="lname" Placeholder = "Last Name" maxlength="500"/></td>
    </tr>

    <tr>
      <td class="input"> ID Number: </td>
      <td class="input"> <input type="text" id = "idno" name="idno" placeholder = "ID Number" maxlength="500"/></td>
    </tr>

    <tr>
      <td class="input">Age: </td>
      <td class="input"><input type="text" id = "age" name="age" placeholder = "Age" maxlength="500"/></td>
    </tr>

    <tr>
      <td class = "input">Gender: </td>
      <td class="input">
        <select name="gender">
          <option value = "m">
            Male
          </option>
          <option value = "f">
            Female
          </option>
        </select>
      </td>
    </tr>

    <tr>
      <td class="input">Religion:</td>
      <td class="input"><input type="text" id = "religion" name="religion" placeholder = "Religion" maxlength="500"/></td>
    </tr>

    <tr>
      <td class="input">Nationality:</td>
      <td class="input"><input type="text" id = "nationality" name="nationality" placeholder = "Nationality" maxlength="500"/></td>
    </tr>

    <tr>
      <td class="input">Special Group: </td>
      <td class="input"><input type="text" id = "sg" name="sg" placeholder = "Special Group" maxlength="500"/></td>
    </tr>

    <tr>
      <td class="input">Email: </td>
      <td class="input"><input type="text" id = "email" name="email" placeholder ="Email" maxlength="500"/><br/> </td>
    </tr>

    <tr>
      <td class="input">Mobile No: </td>
      <td class="input"><input type="text" id = "mno" name="mno" placeholder = "Mobile No." maxlength="500"/></td>
    </tr>

    <tr>
      <td class="input">Landline: </td>
      <td class = "input"><input type="text" id = "landline" name="landline" placeholder = "Landline" maxlength="500"/></td>
    </tr>

    <tr>
      <td class="input">Provincial Address: </td>
      <td class = "input"><input type="text" id = "provad" name="provad" placeholder = "Provincial Address" maxlength="500"/><td>
    </tr>

    <tr>
      <td class="input">Manila Address: </td>
      <td class = "input"><input type="text" id = "manad" name="manad" placeholder = "Manila Address" maxlength="500"/></td>
    </tr>

    <tr>
      <td class="input">Birth Order: </td>
      <td class="input">
        <select name="birthorder">
          <option value = "eldest">
            Eldest Child
          </option>
          <option value = "middle">
            Middle Child 
          </option>
          <option value = "youngest">
            Youngest Child
          </option>
          <option value = "only">
            Only Child
          </option>
        </select>
      </td>
    </tr>

    <tr>
      <td class="input">Family Structure: </td>
      <td class ="input">
        <select name="familyStruct">
            <option value = "LWP">
              Living with parents
            </option>
            <option value = "LWF">
              Living with father
            </option>
            <option value = "LWM">
              Living with mother
            </option>
            <option value = "LA">
              Living Alone
            </option>
            <option value = "LWR">
              Living with relatives
            </option>
        </select>
      </td>
    </tr>

    <tr>
      <td></td>
      <td></td>
     <td><input id="submit" class="btn btn-success" type="submit" value="Save"/></td>
    </tr>    

  </table>
<br/><br/><br/>
</div>
</form>



</div>
<?php
  include('templates/footer.php');
?>