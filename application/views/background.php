<html>
<head>
  <title>DOHub: Case Background</title>
</head>

<?php
  include('bootstrapTop.php');
?>

<body>

  <div id="wrap">
 <form action="" method="post" id="formbox" onsubmit="">
    
<h1><div class ="navbar-fixed-top"> 
  Investigation Report 
</div></h1>
     <div class="maincontainer"> 
 <b>   Letter of </b>
    <select name="letter">
      <option value = "admission">
        Admission 
      </option>
      <option value = "apology">
        Apology 
      </option>
      <option value = "explanation">
        Explanation 
      </option>
    </select>
    </br>
    <textarea type="text" id = "letter" name="letter" maxlength="2000" autofocus></textarea>
      <br/><br/>
    
  <b>  Reason/s for violating the current alleged offense</b><br>
    <input type="text" id = "reason" name="reason" maxlength="500"/>
  <table >
    <tr><td colspan="3"><b>Due to:</b></td></tr>
    <tr>
    <td><input data-enable = "pconcerns"  type="checkbox" id = "cpconcerns" name="cpconcerns"/></td>
    <td class="input"> <b>Personal Concerns </b></td> 
    <td class="input"><input type="text" id = "pconcerns" name="pconcerns" maxlength="500" /></td></tr>

    <tr>
    <td><input data-enable = "sconcerns"  type="checkbox" id = "csconcerns" name="csconcerns" /></td>
    <td class="input"><b>Social Concerns</b></td>
    <td class="input"><input  type="text" id = "sconcerns" name="sconcerns" maxlength="500" disabled/></td></tr>

    <tr>
    <td><input data-enable = "aconcerns"  type="checkbox" id = "caconcerns" name="caconcerns" /></td>
    <td class="input"><b>Academic Concerns</b></td>
    <td class="input"><input  type="text" id = "aconcerns" name="aconcerns" maxlength="500" disabled/></td></tr>

    <tr>
    <td><input data-enable = "cconcerns"  type="checkbox" id = "ccconcerns" name="ccconcerns"/></td>
    <td class="input"><b>Career Concerns</b></td>
    <td class="input"><input  type="text" id = "cconcerns" name="cconcerns" maxlength="500" disabled/></td></tr>

    <tr>
    <td><input data-enable = "oconcerns"  type="checkbox" id = "coconcerns" name="coconcerns"/></td>
    <td class="input"><b>Others</b></td>
    <td class="input"><input  type="text" id = "oconcerns" name="oconcerns" maxlength="500" disabled/></td></tr>
    </table>
    <br/><br/>

    The following are my learnings/insights/reflections</br>
    <input  type="text" id = "learnings" name="learnings" maxlength="1500"/><br/>
    
     The following are my ways which I can apply what I have learned that will benefit me, my family, friends, students and community</br>
     I shall STOP doing the following behavior:</br>
    <input  type="text" id = "stopbehave" name="stopbehave" maxlength="500" /><br/>
     I shall START doing the following behavior:</br>
    <input  type="text" id = "startbehave" name="startbehave" maxlength="500"/><br/>
     I shall CONTINUE doing the following behavior:</br>
    <input  type="text" id = "contbehave" name="contbehave" maxlength="500" /><br/>
    Additional support or programs I need to help me stop, start, and continue the indicated behaviors:</br>
    <input  type="text" id = "support" name="support" maxlength="1500"/><br/>
    I would like the formative case conference to focus on restructuring my:</br>
    <input  type="text" id = "casefocus" name="casefocus" maxlength="1500"/><br/><br/>

    STUDENTS' THOUGHTS, FEELINGS, AND ACTIONS ABOUT THE CASE</br></br>
    What does the Student Handbook say about this issue?</br>
    <input  type="text" id = "hbook" name="hbook" maxlength="1500" /><br/>
    What is my general feeling about the whole issue?</br>
    <input  type="text" id = "feeling" name="feeling" maxlength="1500" /><br/>
    What do I think is the reason such a matter/issue is included in the Student Handbook?</br>
    <input  type="text" id = "reasonhbook" name="reasonhbook" maxlength="1500"/><br/>
    Given my faith, beliefs or values, could I have acted differently?</br>
    <input  type="text" id = "faith" name="faith" maxlength="1500"/><br/>
    What are likely implications of my actions for myself? for others?</br>
    <input  type="text" id = "effects" name="effects" maxlength="1500"/><br/>
    What can I do about the matter/issue at this point of time to put things right?</br>
    <input  type="text" id = "whattodo" name="whattodo" maxlength="1500"/><br/>
    What can I change in myself as far as attitude or behavior is concerned?</br>
    <input  type="text" id = "change" name="change" maxlength="1500"/><br/>
    
    <input id="submit" class="btn btn-success" type="submit" value="Save"/>

    <br/><br/><br/><br/><br/>
  </div>
  </form>
</div>


<?php
  include('footer.php');
?>