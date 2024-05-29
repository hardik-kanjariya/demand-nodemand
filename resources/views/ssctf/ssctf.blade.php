<html>

<head>

@section('adminlte_js')
<script>


  <script>
    function ValidateDeclaration() {
      var sButton = document.getElementById("btnSubmit");
      if (document.form1.chkDeclaration.checked == true) {
        sButton.disabled = false;
      }
      else {
        sButton.disabled = true;
      }
    }  
  </script>


  <script language="JavaScript">


<!-- Dynamic Version by: Nannette Thacker -->
  < !--http://www.shiningstar.net -->
  < !--Original by:  Ronnie T.Moore-- >
  < !--Web Site:  The JavaScript Source-- >
  < !--Use one function for multiple text areas on a page-- >
  < !--Limit the number of characters per textarea-- >
  < !--Begin
    function textCounter(field, cntfield, maxlimit) {
      if (field.value.length > maxlimit)
        field.value = field.value.substring(0, maxlimit);
      else
        cntfield.value = maxlimit - field.value.length;
    }
//  End -->
  </script>

  <title>Production DPR (Developed by Infocom, Mehsana)</title>
  <style>
    body,
    input {
      font-family: verdana, arial;
      font-size: 10pt;
    }
  </style>
  <script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>

</head>

<body onload="goforit()">
  <div id="Layer2"
    style="position:absolute; width:1058px; height:115px; z-index:2; left: 9px; top: 0px; visibility: visible">
    <table width="100%" border="0">
      <tbody>
        <tr>
          <td rowspan="2" width="9%">
            <div align="center"><b></b></div>
            <b><img src="ongc_logo.png" width="61" height="61"></b>
          </td>
          <td width="91%">
            <div align="center"><b>
                <font color="#660000" size="6" face="Arial, Helvetica, sans-serif">OIL
                  AND NATURAL GAS CORPORATION LIMITED</font>
              </b></div>
          </td>
        </tr>
        <tr>
          <td width="91%">
            <div align="center"><b>
                <font size="4" face="Arial, Helvetica, sans-serif">Mehsana
                  Asset</font>
              </b></div>
          </td>
        </tr>
        <tr>
          <td width="9%">
            <div align="center"><b></b></div>
          </td>
          <td width="91%">
            <div align="center"><b>
                <font color="#000099" size="6" face="Arial, Helvetica, sans-serif">Production
                  DPR</font>
              </b></div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div id="Layer6"
    style="position:absolute; width:1058px; height:580px; z-index:12; left: 9px; top: 150px; visibility: visible">

    <form name="form1" method="POST" enctype="multipart/form-data" action="Thanks.asp">

      <table width="100%" border="0" height="100%" background="images/1.jpg">
        <tbody>
          <tr>
            <td width="19%">&nbsp;</td>
            <td width="1%">&nbsp;</td>
            <td width="30%">&nbsp;</td>
            <td width="32%">
              <div align="right">
                <font face="Arial, Helvetica, sans-serif"><i>
                    <font size="2">
                    </font>
                  </i></font>
              </div>
            </td>
          </tr>



          <tr>
            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>Name<br>
                </b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">

              <input type="text" name="Name" size="20" maxlength="255" readonly="" value="S_Santhal_CTF/GCP"
                tabindex="1">



            </td>

          </tr>

          <tr>
            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>Site</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%"><b>
                <font size="2">

                  <input type="text" name="Site" size="20" maxlength="255" readonly="" value="S_Santhal_CTF/GCP"
                    tabindex="3">

                </font>
              </b></td>






          </tr>


          <tr>





            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>Net Oil Production</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">
              <input type="text" name="Production" maxlength="6" size="6" tabindex="5">
              <b></b>
              <font face="Arial, Helvetica, sans-serif">(in m<sup>3</sup>)</font>
            </td>


          </tr>

          <tr>




            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>Net Oil Dispatch Through Line</b></font>
            </td>

            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">
              <input type="text" name="Dispatch_line" maxlength="6" size="6" tabindex="8">
              <b></b>
              <font face="Arial, Helvetica, sans-serif">(in m<sup>3</sup>)</font>
            </td>


          </tr>




          <tr>




            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>Net Oil Closing Stock</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">
              <input type="text" name="Closing_Stock" maxlength="6" size="6" tabindex="11">
              <b></b>
              <font face="Arial, Helvetica, sans-serif">(in m<sup>3</sup>)</font>
            </td>


          </tr>











          <tr>
            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>Emulsion Stock</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">
              <input type="text" name="Emul_Stock" maxlength="6" size="6" tabindex="11">
              <b></b>
              <font face="Arial, Helvetica, sans-serif">(in m<sup>3</sup>)</font>
            </td>


          </tr>



          <tr style="display:none;">
            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>PSC Receipt</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">
              <input type="text" name="PSC_Rcpt" maxlength="6" size="6" tabindex="11">
              <b></b>
              <font face="Arial, Helvetica, sans-serif">(in m<sup>3</sup>)</font>
            </td>


          </tr>
          <tr>
          </tr>


          <tr>
          </tr>

          <tr>
          </tr>

          <tr style="display:none;">
          </tr>

          <tr style="display:none;">
          </tr>



          <tr style="display:none;">
          </tr>








          <tr>

            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>GCP</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">
              <input type="text" name="GCP" maxlength="10" size="10" tabindex="11">
              <b></b>
              <font face="Arial, Helvetica, sans-serif">(in scm)</font>
            </td>

          </tr>
          <tr style="display:none;">
            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>GCP 1</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">
              <input type="text" name="GCP1" maxlength="10" size="10" tabindex="11">
              <b></b>
              <font face="Arial, Helvetica, sans-serif">(in scm)</font>
            </td>

          </tr>
          <tr style="display:none;">

            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>GCP 2</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">
              <input type="text" name="GCP2" maxlength="10" size="10" tabindex="11">
              <b></b>
              <font face="Arial, Helvetica, sans-serif">(in scm)</font>
            </td>

          </tr>


          <tr>

            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>Flue Gas</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">
              <input type="text" name="FLG" maxlength="10" size="10" tabindex="11">
              <b></b>
              <font face="Arial, Helvetica, sans-serif">(in scm)</font>
            </td>

          </tr>

          <tr style="display:none;">

            <td width="19%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>Water Injection</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td width="30%">
              <input type="text" name="WI" maxlength="10" size="10" tabindex="11">
              <b></b>
              <font face="Arial, Helvetica, sans-serif">(in scm)</font>
            </td>

          </tr>





          <tr>
            <td width="17%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>Remarks</b></font>
            </td>
            <td width="1%">
              <font face="Arial, Helvetica, sans-serif" size="3"><b>:</b></font>
            </td>
            <td rowspan="3" width="32%">
              <p><b>
                  <font size="2">
                    <textarea id="inputField" name="Remarks" cols="30" rows="7" tabindex="13" maxlength="200"></textarea>
                  </font>
                </b></p>
              <p>
                <input readonly="" type="text" id="charCount" name="charCount" size="4" maxlength="3" value="0" tabindex="-2">
                characters left
              </p>
            </td>

          </tr>
          <tr>
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr></tr>
          <tr>
            <td colspan="6">
              <font size="2" color="#FF0000">Note : All fields are mandatory</font>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <input type="checkbox" name="chkDeclaration" value="checkbox" onclick="javascript:ValidateDeclaration()">
              <font size="2">I declare that information given above is true and correct
                to best of my knowledge.</font>
            </td>
          </tr>
          <tr>
            <td width="19%">&nbsp;</td>
            <td width="1%">&nbsp;</td>
            <td width="30%">&nbsp;</td>
            <td width="17%">&nbsp;</td>
            <td width="1%">&nbsp;</td>
            <td width="32%">&nbsp;</td>
          </tr>
          <tr>
            <td width="19%">&nbsp;</td>
            <td width="1%">&nbsp;</td>
            <td width="30%"><b>
                <font size="2">
                  <input type="submit" value="Submit" name="submit" disabled="disabled" id="btnSubmit">
                </font>
              </b></td>
            <td width="17%">&nbsp;</td>
            <td width="1%">&nbsp;</td>
            <td width="32%"><b>
                <font size="+1">
                  <input type="reset" name="Reset2" value="Reset">
                </font>
              </b></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td colspan="6">
              <div align="center"><b>
                  <font face="Arial, Helvetica, sans-serif">Your
                    IP address:</font>
                </b>
                <font face="Arial, Helvetica, sans-serif">10.205.82.41
                </font> <b>
                  <font face="Arial, Helvetica, sans-serif">is monitored
                    and logged</font>
                </b>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>

  <div id="Layer1"
    style="position:absolute; width:1000px; height:18px; z-index:10; left: 9px; top: 111px; background-color: #003366; layer-background-color: #003366; border: 1px none #000000; visibility: visible">
    <b>
      <font face="Arial, Helvetica, sans-serif" color="#ffffff" size="3">
        <title>User Login</title>Welcome S_Santhal_CTF/GCP
      </font><u>
        <font face="Arial, Helvetica, sans-serif" color="red" size="3">
          <center> Morning Shift</center>
        </font>
      </u>
    </b></div>
  <div id="Layer4"
    style="position:absolute; width:58px; height:18px; z-index:10; left: 1009px; top: 111px; background-color: #003366; layer-background-color: #003366; border: 1px none #000000; visibility: visible">
    <b>
      <font face="Arial, Helvetica, sans-serif">
        <a href="logout.asp">
          <font color="#ffffff" size="3">Logout</font>
        </a>
      </font>
    </b></div>
  <div id="Layer5"
    style="position:absolute; width:350px; height:20px; z-index:11; left: 9px; top: 89px; visibility: visible">
    <script>

      /*
      Live Date Script- 
      © Dynamic Drive (www.dynamicdrive.com)
      For full source code, installation instructions, 100's more DHTML scripts, and Terms Of Use,
      visit http://www.dynamicdrive.com
      */


      var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
      var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")

      function getthedate() {
        var mydate = new Date()
        var year = mydate.getYear()
        if (year < 1000)
          year += 1900
        var day = mydate.getDay()
        var month = mydate.getMonth()
        var daym = mydate.getDate()
        if (daym < 10)
          daym = "0" + daym
        var hours = mydate.getHours()
        var minutes = mydate.getMinutes()
        var seconds = mydate.getSeconds()
        var dn = "AM"
        if (hours >= 12)
          dn = "PM"
        if (hours > 12) {
          hours = hours - 12
        }
        if (hours == 0)
          hours = 12
        if (minutes <= 9)
          minutes = "0" + minutes
        if (seconds <= 9)
          seconds = "0" + seconds
        //change font size here
        var cdate = "<large><font color='000000' face='Arial'><b>" + dayarray[day] + ", " + montharray[month] + " " + daym + ", " + year + " " + hours + ":" + minutes + ":" + seconds + " " + dn
          + "</b></font></large>"
        if (document.all)
          document.all.clock.innerHTML = cdate
        else if (document.getElementById)
          document.getElementById("clock").innerHTML = cdate
        else
          document.write(cdate)
      }
      if (!document.all && !document.getElementById)
        getthedate()
      function goforit() {
        if (document.all || document.getElementById)
          setInterval("getthedate()", 1000)
      }
      const inputField = document.getElementById('inputField');
      const charCount = document.getElementById('charCount');

      inputField.addEventListener('input', function() {
        const count = inputField.value.length;
        charCount.value = count;
      });

    </script>
    <span id="clock">
      <large>
        <font color="000000" face="Arial"><b>Friday, April 28, 2023 4:48:39 PM</b></font>
      </large>
    </span>
  </div>


  <div id="Layer3"
    style="position:absolute; width:1058px; height:19px; z-index:3; left: 9px; top: 750px; background-color: #FF9900; layer-background-color: #FF9900; border: 1px none #000000; visibility: visible">
    <div align="center"><b>Designed &amp; developed by : Infocom Services, Mehsana</b></div>
  </div>
  <div id="Layer2"
    style="position:absolute; width:1058px; height:15px; z-index:9; left: 9px; top: 771px; background-color: #002266; layer-background-color: #002266; border: 1px none #000000; visibility: visible">
    <div align="center">
      <font color="#FFFFFF" size="1">Site best viewed in 1024
        x 768 resolution</font>
    </div>
  </div>

  <p>
    <script language="JavaScript" type="text/javascript">
      var frmvalidator = new Validator("form1");



      frmvalidator.addValidation("Production", "decimal");
      frmvalidator.addValidation("Production", "req", "Please enter Production");


      frmvalidator.addValidation("Dispatch_line", "decimal");
      frmvalidator.addValidation("Dispatch_line", "req", "Please enter Dispatch through line");



      frmvalidator.addValidation("Closing_Stock", "decimal");
      frmvalidator.addValidation("Closing_Stock", "req", "Please enter Closing Stock");

      frmvalidator.addValidation('GCP', 'decimal'); frmvalidator.addValidation('GCP', 'req', 'Please enter GCP value'); frmvalidator.addValidation('FLG', 'decimal'); frmvalidator.addValidation('FLG', 'req', 'Please enter Flue Gas value');
      frmvalidator.addValidation("Remarks", "req", "Please enter Remarks");
      frmvalidator.addValidation("Remarks", "maxlen=255");






    </script>
  </p>

</body>

</html>