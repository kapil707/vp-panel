<?php 
//Template Name:Janmarashi-pg
?>
<?php get_header("mobile"); ?>
<p class="font-bold text-[24px] mb-2" style="font-size: 12px;text-align: right;">
	<?php echo get_field_data('login_label2','73'); ?>
</p>
<div>
	<p class="text-[#A17603] font-semibold text-center pt-2 px-4 text-[24px] my-3 leading-7">
		<?php echo get_field_data('login_label3','73'); ?>
	</p>
	<div class="flex justify-center items-center gap-4 mx-auto mt-3">
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="text-[#A17603] w-[29px] h-[30px]"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"></path></svg>
		<p class="text-[#A17603] font-normal text-[22px]">
			<?php echo get_field_data('login_label4','73'); ?>
		</p>
	</div>
</div>
<p class="font-medium text-[#A17603] text-center">
	<?php echo get_field_data('login_label5','73'); ?>
</p>
<hr>
<form name="LunarCalc">
<input class="body8" style="WIDTH: 180px; TEXT-ALIGN: center" name="npmoon">
            <table cellspacing="0" cellpadding="0" width="200" border="2" bgcolor="#FFCC66" bordercolor="#FFCC66">
              <tbody>
              <tr>
                <td class="body9b" colspan="6">
                  <p align="center"><b>Enter Your Birth Details Here</b></p>
                </td></tr>
              <tr>
                <td colspan="6">
                  <table cellspacing="0" cellpadding="0" width="210" border="0">
                    <tbody>
                    <tr>
                      <td><img height="3" src="space.gif" width="1"></td></tr>
                    <tr>
                      <td bgcolor="#ffcc66"><img height="1" src="space.gif" width="1"></td></tr>
                    <tr>
                      <td bgcolor="#faf3d8"><img height="3" src="space.gif" width="1"></td></tr></tbody></table></td></tr>
              <tr valign="center" align="left">
                <td class="body8" bgcolor="#fad3d8" colspan="6">&nbsp;Date of 
				Birth(Date/Month/Year)</td></tr>
              <tr valign="center" align="left">
                <td width="69" bgcolor="#faf3d8"><img height="5" src="space.gif" width="69"></td>
                <td class="body8" width="30" bgcolor="#faf3d8"><input class="body8" style="WIDTH: 22px" tabindex="2" size="1" value="1" name="Day"> </td>
                <td class="body8" width="8" bgcolor="#faf3d8">:</td>
                <td class="body8" width="25" bgcolor="#faf3d8"><input class="body8" style="WIDTH: 22px" tabindex="1" size="1" value="1" name="Month"> </td>
                <td class="body8" width="8" bgcolor="#faf3d8">:</td>
                <td class="body8" width="60" bgcolor="#faf3d8"><input class="body8" style="WIDTH: 40px" tabindex="3" size="3" value="2001" name="Year"> 
              </td></tr>
              <tr valign="center" align="left">
                <td colspan="6">
                  <table cellspacing="0" cellpadding="0" width="200" border="0">
                    <tbody>
                    <tr>
                      <td bgcolor="#faf3d8"><img height="3" src="space.gif" width="1"></td></tr>
                    <tr>
                      <td bgcolor="#ffcc66"><img height="1" src="space.gif" width="1"></td></tr>
                    <tr>
                      <td bgcolor="#faf3d8"><img height="3" src="space.gif" width="1"></td></tr></tbody></table></td></tr>
              <tr valign="center" align="left">
                <td class="body8" bgcolor="#faf3d8" colspan="6">&nbsp;Time of Birth 
				(24 hrs. format)</td></tr>
              <tr valign="center" align="left">
                <td class="body8" bgcolor="#faf3d8"><img height="5" src="space.gif" width="60"></td>
                <td class="body8" bgcolor="#faf3d8"><input class="body8" style="WIDTH: 22px" tabindex="4" size="1" value="12" name="Hour"> </td>
                <td class="body8" bgcolor="#faf3d8">:</td>
                <td class="body8" bgcolor="#faf3d8"><input class="body8" style="WIDTH: 22px" tabindex="5" maxlength="2" size="1" value="00" name="Min"> </td>
                <td class="body8" bgcolor="#faf3d8" colspan="2">&nbsp;Hrs:Min.</td></tr>
              <tr valign="center" align="left">
                <td colspan="6">
                  <table cellspacing="0" cellpadding="0" width="200" border="0">
                    <tbody>
                    <tr>
                      <td bgcolor="#FFCC66"><img height="3" src="space.gif" width="1"></td></tr>
                    <tr>
                      <td bgcolor="#FAF3D8"><img height="1" src="space.gif" width="1"></td></tr>
                    <tr>
                      <td bgcolor="#faf3d8"><img height="3" src="space.gif" width="1"></td></tr></tbody></table></td></tr>
              <tr valign="center" align="left">
                <td class="body8" bgcolor="#faf3d8">&nbsp;DST</td>
                <td class="body8" bgcolor="#faf3d8" colspan="5"><input tabindex="6" type="checkbox" value="DST" name="DST"> 
				Daylight Saving</td></tr>
              <tr valign="center" align="left">
                <td colspan="6">
                  <table cellspacing="0" cellpadding="0" width="200" border="0">
                    <tbody>
                    <tr>
                      <td bgcolor="#faf3d8"><img height="3" src="space.gif" width="1"></td></tr>
                    <tr>
                      <td bgcolor="#ffcc66"><img height="1" src="space.gif" width="1"></td></tr>
                    <tr>
                      <td bgcolor="#faf3d8"><img height="3" src="space.gif" width="1"></td></tr></tbody></table></td></tr>
              <tr valign="center" align="left">
                <td class="body8" bgcolor="#faf3d8">&nbsp;Country</td>
                <td class="body8" bgcolor="#faf3d8" colspan="5"><select class="body8" style="WIDTH: 120px" tabindex="7" name="country"> <option value="4.5">
				Afghanistan</option> <option value="1">Albania</option> <option value="1">
				Algeria</option> 
                    <option value="-11">American Samoa</option> <option value="1">
				Andorra</option> <option value="1">Angola</option> 
                    <option value="-2">Antarctica</option> <option value="-4">
				Antigua and Barbuda</option> <option value="-3">Argentina</option> <option value="4">
				Armenia</option> 
                    <option value="-4">Aruba</option> <option value="0">
				Ascension</option> <option value="9.5">Australia North</option> <option value="10">
				Australia South</option> 
                    <option value="8">Australia West</option> <option value="10">
				Australia East</option> <option value="1">Austria</option> <option value="3">
				Azerbaijan</option> 
                    <option value="-5">Bahamas</option> <option value="3">
				Bahrain</option> <option value="6">Bangladesh</option> 
                    <option value="-4">Barbados</option> <option value="2">
				Belarus</option> <option value="1">Belgium</option> 
                    <option value="-6">Belize</option> <option value="1">Benin</option> <option value="-4">
				Bermuda</option> 
                    <option value="6">Bhutan</option> <option value="-4">Bolivia</option> <option value="1">
				Bosnia Herzegovina</option> <option value="2">Botswana</option> 
                    <option value="-4">Brazil West</option> <option value="-3">
				Brazil East</option> <option value="-4">British Virgin Islands</option> <option value="8">
				Brunei</option> 
                    <option value="2">Bulgaria</option> <option value="0">
				Burkina Faso</option> <option value="2">Burundi</option> <option value="7">
				Cambodia</option> <option value="1">Cameroon</option> 
                    <option value="-6">Canada Central</option> <option value="-5">
				Canada Eastern</option> <option value="-7">Canada Mountain</option> <option value="-8">
				Canada Pacific</option> 
                    <option value="-3.5">Canada Newfoundland</option> <option value="-1">
				Cape Verde</option> <option value="-5">Cayman Islands</option> <option value="1">
				Central African Rep</option> <option value="1">Chad Rep</option> <option value="-4">
				Chile</option> <option value="8">China</option> 
                    <option value="-10">Christmas Is.</option> <option value="-5">
				Colombia</option> <option value="1">Congo</option> 
                    <option value="-10">Cook Is.</option> <option value="-6">
				Costa Rica</option> <option value="1">Croatia</option> <option value="-5">
				Cuba</option> <option value="2">Cyprus</option> 
                    <option value="1">Czech Republic</option> <option value="1">
				Denmark</option> <option value="3">Djibouti</option> 
                    <option value="-4">Dominica</option> <option value="-4">
				Dominican Republic</option> <option value="-5">Ecuador</option> <option value="2">
				Egypt</option> 
                    <option value="-6">El Salvador</option> <option value="1">
				Equatorial Guinea</option> <option value="3">Eritrea</option> <option value="2">
				Estonia</option> 
                    <option value="3">Ethiopia</option> <option value="0">Faeroe 
				Islands</option> <option value="-4">Falkland Islands</option> 
                    <option value="12">Fiji Islands</option> <option value="2">
				Finland</option> <option value="1">France</option> 
                    <option value="-3">French Antilles (Martinique)</option> 
                    <option value="-3">French Guinea</option> <option value="-10">
				French Polynesia</option> <option value="1">Gabon Republic</option> <option value="0">
				Gambia</option> <option value="4">Georgia</option> <option value="1">
				Germany</option> 
                    <option value="0">Ghana</option> <option value="1">Gibraltar</option> <option value="2">
				Greece</option> 
                    <option value="-3">Greenland</option> <option value="-4">
				Grenada</option> <option value="-4">Guadeloupe</option> <option value="10">
				Guam</option> 
                    <option value="-6">Guatemala</option> <option value="0">
				Guinea-Bissau</option> <option value="0">Guinea</option> <option value="-3">
				Guyana</option> 
                    <option value="-5">Haiti</option> <option value="-6">
				Honduras</option> <option value="8">Hong Kong</option> <option value="1">
				Hungary</option> <option value="0">Iceland</option> <option value="5.5">
				India</option> 
                    <option value="8">Indonesia Central</option> <option value="9">
				Indonesia East</option> <option value="7">Indonesia West</option> <option value="3.5">
				Iran</option> <option value="3">Iraq</option> <option value="0">
				Ireland</option> 
                    <option value="2">Israel</option> <option value="1">Italy</option> <option value="-5">
				Jamaica</option> 
                    <option value="9">Japan</option> <option value="2">Jordan</option> <option value="6">
				Kazakhstan</option> 
                    <option value="3">Kenya</option> <option value="12">Kiribati</option> <option value="9">
				Korea, North</option> <option value="9">Korea, South</option> <option value="3">
				Kuwait</option> <option value="5">Kyrgyzstan</option> 
                    <option value="7">Laos</option> <option value="2">Latvia</option> <option value="2">
				Lebanon</option> 
                    <option value="2">Lesotho</option> <option value="0">Liberia</option> <option value="2">
				Libya</option> 
                    <option value="1">Liechtenstein</option> <option value="2">
				Lithuania</option> <option value="1">Luxembourg</option> <option value="1">
				Macedonia</option> <option value="3">Madagascar</option> <option value="2">
				Malawi</option> 
                    <option value="8">Malaysia</option> <option value="5">
				Maldives</option> <option value="0">Mali Republic</option> <option value="1">
				Malta</option> <option value="12">Marshall Islands</option> <option value="0">
				Mauritania</option> <option value="4">Mauritius</option> <option value="3">
				Mayotte</option> 
                    <option value="-6">Mexico Central</option> <option value="-5">
				Mexico East</option> <option value="-7">Mexico West</option> <option value="2">
				Moldova</option> <option value="1">Monaco</option> <option value="8">
				Mongolia</option> 
                    <option value="0">Morocco</option> <option value="2">
				Mozambique</option> <option value="6.5">Myanmar</option> <option value="1">
				Namibia</option> 
                    <option value="12">Nauru</option> <option value="5.5">Nepal</option> <option value="1">
				Netherlands</option> <option value="-4">Netherlands Antilles</option> <option value="11">
				New Caledonia</option> 
                    <option value="12">New Zealand</option> <option value="-6">
				Nicaragua</option> <option value="1">Nigeria</option> 
                    <option value="1">Niger Republic</option> <option value="11.5">
				Norfolk Island</option> <option value="1">Norway</option> <option value="4">
				Oman</option> 
                    <option value="5">Pakistan</option> <option value="9">Palau</option> <option value="-5">
				Panama, Republic Of</option> <option value="10">Papua New Guinea</option> 
                    <option value="-4">Paraguay</option> <option value="-5">Peru</option> <option value="8">
				Philippines</option> 
                    <option value="1">Poland</option> <option value="1">Portugal</option> <option value="-4">
				Puerto Rico</option> <option value="3">Qatar</option> <option value="4">
				Reunion Island</option> <option value="2">Romania</option> <option value="2">
				Russia West</option> <option value="4">Russia Central 1</option> 
                    <option value="7">Russia Central 2</option> <option value="11">
				Russia East</option> <option value="2">Rwanda</option> <option value="-4">
				Saba</option> 
                    <option value="-11">Samoa</option> <option value="1">San 
				Marino</option> <option value="0">Sao Tome</option> <option value="3">
				Saudi Arabia</option> <option value="0">Senegal</option> <option value="4">
				Seychelles Islands</option> <option value="0">Sierra Leone</option> 
                    <option value="8">Singapore</option> <option value="1">
				Slovakia</option> <option value="1">Slovenia</option> 
                    <option value="11">Solomon Islands</option> <option value="3">
				Somalia</option> <option value="2">South Africa</option> <option value="1">
				Spain</option> <option value="5.5">Sri Lanka</option> <option value="-4">
				St Lucia</option> <option value="-4">St Maarteen</option> <option value="-3">
				St Pierre &amp; Miquelon</option> <option value="-4">St Thomas</option> <option value="-4">
				St Vincent</option> <option value="2">Sudan</option> <option value="-3">
				Suriname</option> <option value="2">Swaziland</option> <option value="1">
				Sweden</option> 
                    <option value="1">Switzerland</option> <option value="2">
				Syria</option> <option value="8">Taiwan</option> 
                    <option value="6">Tajikistan</option> <option value="3">
				Tanzania</option> <option value="7">Thailand</option> 
                    <option value="0">Togo</option> <option value="13">Tonga 
				Islands</option> <option value="-4">Trinidad and Tobago</option> <option value="1">
				Tunisia</option> <option value="2">Turkey</option> <option value="5">
				Turkmenistan</option> <option value="-5">Turks and Caicos</option> <option value="12">
				Tuvalu</option> <option value="3">Uganda</option> <option value="2">
				Ukraine</option> 
                    <option value="4">United Arab Emirates</option> <option value="0">
				United Kingdom</option> <option value="-3">Uruguay</option> <option value="-5" selected="">
				USA Eastern</option> <option value="-6">USA Central</option> 
                    <option value="-7">USA Mountain</option> <option value="-8">
				USA Pacific</option> <option value="-9">USA Alaska</option> 
                    <option value="-10">USA Hawaii</option> <option value="5">
				Uzbekistan</option> <option value="11">Vanuatu</option> <option value="1">
				Vatican City</option> <option value="-4">Venezuela</option> <option value="7">
				Vietnam</option> <option value="12">Wallis And Futuna Islands</option> <option value="3">
				Yemen</option> <option value="1">Yugoslavia</option> <option value="2">
				Zaire</option> 
                    <option value="2">Zambia</option> <option value="2">Zimbabwe</option></select> </td></tr><!--                <tr align="left" valign="middle"> 
                  <td colspan="6"> 
                    <table width="200" border="0" cellspacing="0" cellpadding="0">
                      <tr> 
                        <td bgcolor="#FAF3D8"><img src="space.gif" width="1" height="3"></td>
                      </tr>
                      <tr> 
                        <td bgcolor="#FFCC66"><img src="space.gif" width="1" height="1"></td>
                      </tr>
                      <tr> 
                        <td bgcolor="#FAF3D8"><img src="space.gif" width="1" height="3"></td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr align="left" valign="middle"> 
                  <td class="body8" bgcolor="#FAF3D8">&nbsp;Time Zone</td>
                  <td class="body8" bgcolor="#FAF3D8"> 
                    <input type="text" name="ZHour" style="width:22px" size="1" value="5" tabindex="6" class="body8">
                  </td>
                  <td class="body8" bgcolor="#FAF3D8">:</td>
                  <td class="body8" bgcolor="#FAF3D8"> 
                    <input type="text" name="ZMin" style="width:22px" size="1" value="0" maxlength="2" tabindex="7" class="body8">
                  </td>
                  <td class="body8" bgcolor="#FAF3D8" colspan="2">&nbsp;hrs.</td>
                </tr>
                <tr align="left" valign="middle"> 
                  <td colspan="6"> 
                    <table width="200" border="0" cellspacing="0" cellpadding="0">
                      <tr> 
                        <td bgcolor="#FAF3D8"><img src="space.gif" width="1" height="3"></td>
                      </tr>
                      <tr> 
                        <td bgcolor="#FFCC66"><img src="space.gif" width="1" height="1"></td>
                      </tr>
                      <tr> 
                        <td bgcolor="#FAF3D8"><img src="space.gif" width="1" height="3"></td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr align="left" valign="middle"> 
                  <td class="body8" bgcolor="#FAF3D8">&nbsp;Longitude</td>
                  <td class="body8" bgcolor="#FAF3D8"> 
                    <input type="text" name="LonDeg" style="width:28px" size="2" value="0" maxlength="3" tabindex="9" class="body8">
                  </td>
                  <td class="body8" bgcolor="#FAF3D8">:</td>
                  <td class="body8" bgcolor="#FAF3D8"> 
                    <input type="text" name="LonMin" style="width:22px" size="1" value="0"  tabindex="10" class="body8">
                  </td>
                  <td class="body8" bgcolor="#FAF3D8" colspan="2"> 
                    <input type="checkbox" name="East" value="East" tabindex="11">
                    East</td>
                </tr>
                <tr align="left" valign="middle"> 
                  <td colspan="6"> 
                    <table width="200" border="0" cellspacing="0" cellpadding="0">
                      <tr> 
                        <td bgcolor="#FAF3D8"><img src="space.gif" width="1" height="3"></td>
                      </tr>
                      <tr> 
                        <td bgcolor="#FFCC66"><img src="space.gif" width="1" height="1"></td>
                      </tr>
                      <tr> 
                        <td bgcolor="#FAF3D8"><img src="space.gif" width="1" height="3"></td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr align="left" valign="middle"> 
                  <td class="body8" bgcolor="#FAF3D8">&nbsp;Latitude</td>
                  <td class="body8" bgcolor="#FAF3D8"> 
                    <input type="text" name="LatDeg" style="width:22px" size="1" value="0" tabindex="12" class="body8">
                  </td>
                  <td class="body8" bgcolor="#FAF3D8">:</td>
                  <td class="body8" bgcolor="#FAF3D8"> 
                    <input type="text" name="LatMin" style="width:22px" size="1" value="0" tabindex="13" class="body8">
                  </td>
                  <td class="body8" bgcolor="#FAF3D8" colspan="2"> 
                    <input type="checkbox" name="South" value="South" tabindex="14">
                    South</td>
                </tr> -->
              <tr>
                <td colspan="6">
                  <table cellspacing="0" cellpadding="0" width="200" border="0">
                    <tbody>
                    <tr>
                      <td bgcolor="#faf3d8"><img height="3" src="space.gif" width="1"></td></tr>
                    <tr>
                      <td bgcolor="#ffcc66"><img height="1" src="space.gif" width="1"></td></tr>
                    <tr>
                      <td><img height="3" src="space.gif" width="1"></td></tr></tbody></table></td></tr>
              <tr align="middle">
                <td class="body8" colspan="6"><input class="body8" onClick="calculate()" tabindex="8" type="button" value="Calculate" name="Calculate"> 
                </td></tr></tbody></table></form>
                
                <script language="JavaScript">
	var ns4dom = (document.layers)? true:false;
	var ie4dom = (document.all)? true:false;
	var	ns6dom = false;
	// globals
	d2r = Math.PI/180;
	r2d = 180/Math.PI;
	var ra,dc;	// right ascension, declination
	var pln,plt; // parallax longitude and latitude
	lord = "KeVeSuMoMaRaJuSaMe";
	lord1 = "KetVenSunMonMarRahJupSatMer";
	var dasha = [7,20,6,10,7,18,16,19,17];
	var zn = "AriTauGemCanLeoVirLibScoSagCapAquPis";  // Zodiac
	var znl = "Aries (Mesha)~Taurus (Vrushaba)~Gemini (Mithuna)~Cancer (Kataka)~Leo (Simha)~Virgo (Kanya)~Libra (Tula)~Scorpio (Vrushika)~Sagittarius (Dhanu)~Capricorn (Makara)~Aquarius (Kumbha)~Pisces (Meena)";  // Zodiac
	zsign=znl.split("~")
	var range = [1,31,1,12,1800,2100,0,23,0,59,0,0,0,12,0,59,0,179,0,59,0,0,0,89,0,59]; 	
	var naks = ["Ashwini","Bharani","Krittika","Rohini","Mrigashira","Ardra","Punarvasu",
	"Pushya","Ashlesha","Magha","Purva Phalguni","Uttara Phalguni","Hasta","Chitra","Swati",
	"Vishakha","Anuradha","Jyeshtha","Mula","Purva Shadya","Uttara Shadya","Shravana",
	"Dhanishtha","Shatbisha","Purva Bhadrapada","Uttara Bhadrapada","Revati"];
	var vinter1 ="Your Janma Rashi or the Sign Moon was positioned at Birth is";
	var vinter2 ="According to Vedic Astrology : ";
    var vinter3a = "Generally Ariens or Mesha are short~Usually Taurus or Vrushaba born natives~People born in Mithuna or Gemini~Kataka or Cancerians~Usually Simha or Leos are rules~Virgo or Kanya is a feminine sign~Libras or Tula are well balanced~Scorpios or Vrushika are stubborn~Sagittarius or Dhanu are the warriors~Capricornians or Makara are mixed breed~Aquarions or Kumbha are deep thinkers~Pisciens or Meena act fast";
	vinter3=vinter3a.split("~");
	vinter5a = "You may have a mediocre height, will move around energetically and your eyes will have a sharp and aggressive look. Your knees and its lower part will be weak. You will not tolerate anybody's subordination and will always take the lead in your work and take independent decisions. You will be strong willed, endowed with qualities of leadership, will be enterprising and ambitious. You will be anxious nature and will lack patience. You will always be keen to give advise and will always make efforts to impress anyone who may come in contact with you. You will be lively and energetic and firm in your beliefs. You will be capable of making plans and running organizations. You will be truthful and will respect sincere people. You will enjoy debates and arguments. You will be enthusiastic and aggressive in speech. You will be egoistic and will always give importance to yourself. You will be self-centered and unsacrificing. You will have an uncompromising attitude. You will be bold and courageous. Your weakness may be wavering thoughts, impatience, unbridled anger, quarrelsome and aggressive nature and blind faith in religion.~You will be stable and firm natured, patient and tolerant, endowed with physical and mental tolerance and forbearing, having a dangerous and violent temper, collector of worldly comforts, capable of sacrificing everything for your beloved and unforgiving towards the people you hate. You are fond of beauty, music, art, good clothes and a happy and luxurious life. You will strive to acquire all luxuries. You will be stubborn and will have the ability to accomplish your plans and will give a lot of thought to trivial work. You will be practical about money matters and will be desirous of earning wealth and you will care about targets, not the medium. You will make friends after long consideration and will be devoted to your friend. You will bear responsibility in relation to your loveaffairs and family life. You will suffer disappointments and anxiety because of laziness, selfishness, sensuality, materialism and other faults.~You will be of sharp mind, inclined towards education, interested in varied subjects, writing, reading and be intellectual. You will be very thoughtful and capable of scaling long distances in a few minutes. You will have dual nature, sometimes will be serious and at times you will be playful and talkative. You will be skilled and eloquent in speech. Due to this quality you will impress people quickly. You will be very clever and skilled at getting your work done. You will be a skilled diplomat and may be involved in being witness in a court of law and will have faith in social traditions. Due to your inquisitive and analytical nature you will be keen to delve in the depth of things as though it were some research. You will be interested in singing and music and will have special interest in dance and poetry. You will be a self-critical and self-destructive person. Your main drawbacks are talkativeness, variation, starting new work without completing the previous one, lack of concentration, lack of taking quick decisions, anxiety and impatience to know the result of anything.~You will be very sensitive, very emotional, imaginative, flexible and will be hard from outside but gentle inside. You will be faithful to his or her dear ones and elders and will be loyal to his or her duties. You will be interested in singing and will be happy in listening to music. his or her mind may be unstable but You will be endowed with intuitive powers. You will have a loving relationship with his or her family especially with his or her mother. You will be fearful of being insulted. Sometimes You will be very strict and at times You will be very vulnerable. You will be fond of eating sweets. You will be fond of travelling and inspite of being patriotic, You will be interested in travelling abroad. You will appear to be open-hearted and outspoken but actually You will hide a lot of things. Some of his or her main drawbacks will be impatience,flexibility, oversensitivity and indolence and short-tempered.~Usually a person born under Leo or Simha rashi will have a broad face, will move fearlessly and as balanced as a lion, be physically fit and have beautiful and expressive eyes. The Lord of Leo is the Sun, known as the king of the planetary cycle, so the person will have kingly qualities, be cultured, frank and open-hearted and liberal and honest. The person will be liberal and large hearted. The person will possess qualities of leadership and organization. The person will be ambitious and will be desirous of achieving his or her goal. The person will be independent but not impertinent. When The person is enraged, The person may be aggressive but will have the amazing quality of forgiving and forgetting. The person will be fearless, bold, principled and unused of being ordered by others. The person will complete his or her work with dedication but occasionally The person may be lethargic and lazy. The person may suddenly leave all work and sit down. The person will try to live happily in all circumstances. The person will be religious, charitable, egoistic and self-respective. The person will have drawbacks like arrogance, being fond of flattering, self-praise, a tendency to impress others, self-exposure and partiality in behaviour.~The person will be tall or mediocre in height, will have black eyes, bushy eyebrows, sweet voice, plump cheeks and femininely delicate face. The Lord of Virgo rashi is Mercury, which likes changes, so the person born in Virgo rashi will also like changes. The person will be intelligent and logical, skilled at analyzing matters and will be very careful and alert in his or her work. Every work should be done correctly according to him and therefore The person will always analyze it two or three times. The person will expect others to talk in brief, but The person will give elaborate descriptions. The person will be expert in finding mistakes in others. The person will be shy and reserved in nature. The person will a born critic and will always delve into the root of things in the most trivial of matters. The person will complete his or her work in a systematic and organized way. The person will obey the instructions carefully and in a detailed manner. The person will have a real interest in education and will be naturally inclined towards acquiring knowledge. Being intelligent, The person will love learned and thoughtful persons. The person will be humorous and knowledgeable in singing, musical instruments, sports and arts. The person will be well known for his or her beautiful clothes and his or her knowledge about artistic things. The person will believe in self- exhibition and will love exhibiting more than what The person actually has. The person may have drawbacks like teasing and irritating others by being unnecessarily critical, exhibiting impatience or nervousness, self-doubt and exaggeration.~Generally the person born under Libra or Tula rashi will have beautiful features, mole on the face or on the neck may be possible. The lord of Libra rashi is Venus, and Venus is the king of figure and beauty. So the person will be a lover of beauty. The person will be attracted towards natural beauty, beautiful pictures and beautiful and sweet songs. Libra is a balanced rashi, so The person will have a balanced mind and The person will examine merits and demerits before taking any decision. The person will be a lover of justice and will test everything in a logical way and will express his or her feeling without any exaggeration. The person will be kind hearted and soft-spoken, easily enraged but calmed immediately in a few moments. The person will be truthful and skilled at mediation. The person will give more importance to morality then truth. The person will be a great humanitarian, trustworthy and peaceful. The person will be ready to pay any cost to acquire peace. The person will try to stay away from arguments and debates as far as possible. The person will be popular in his or her friend's circle because The person will always be eager to help others. his or her friends will be reputable and will belong to the high class. The person will not be lazy, although The person will not be energetic and active. The person will be fortunate, devoted to God and teachers and will take interest in intellectual work. The person should try to work on the following - keep his or her emotions under control, not to appoint opposite sex as private secretary, forgive others but not forget them, not to spend much on clothes, try to take quick decisions.~The person will have a squarish face, wide forehead, black eyes, will be alert, bold, sharp eyed, a balanced, open and attractive nose and an impressive physical built. The person will be hardworking and devoted to his or her work and will be committed to achieve his or her goal. The person will be imaginative, intelligent, meditative and emotional. The Lord of Scorpio is Mars, which gives qualities like self-confidence, restraint, courage, bravery, resolution, freedom, aggressiveness and boldness. The person will be an extremist- The person may be a saint as well as a rascal. If The person loves someone The person may exceed all limits and if The person hates someone The person may hate to the limit of madness. The person will be a good critic and will be skilled at criticizing others. The person will be outspoken, abusive, sarcastic and revengeful. The person will be appear to be idealistic, liberal from outside but will be suspicious and jealous person. The person may lead a duplicate life - one for showing off to others and another for himself. The person will be alert about his or her self-importance and The person will be an expert in exaggerating his or her deeds to establish his or her importance. The person will be interested in topics like mysteries, the unknown death and super natural powers. The person will be inclined towards mysterious subjects like Astrology, tantra-mantra, chemistry, philosophy and psychology and mysteries of the sea. The person will be desirous to other spiritual love and will be loyal and trustworthy towards those, whom The person loves very much. The person will sacrifice at any cost for his or her love.~The person will be tall or of medium height, will have strong bones, gravitational force in the body, squarish or longish face, balanced nose, round chin, wide forehead, bushy eyebrows and attractive teeth. The person will be determined and ambitious and will be interested in knowledgeable subjects like philosophy, science, law and literature, arts, idealism and principles of life. The person will be logically minded and very inquisitive. The person will be freedom loving, self-confident, ambitious and self-respected, outspoken, trustworthy, judicious and unostentatious. The person will be an atheist, The person will be religious, moral, liberal, honest, sympathetic and sensitive. The person will be interested in astrology and will have the amazing power to examine and understand the future. The person will possess new thoughts but will not be so attracted to them at the cost of severing all connections with old traditions. Basically The person will be orthodox and traditional. The person will examine the positive and negative points of everything before taking any decision. The person will be known as a humorous and a good human being in his or her friend circle.~Generally a person born in Capricorn or Makara rashi will be very ambitious, industrious, skilled, service oriented and admired in society for his or her social work. The person will be philosophical and materialistic also. The person will be patient, hardworking and devoted. The person will progress through his or her own efforts. The person will do every activity in a systematic manner and will take every step after deep thought. his or her personality will be contradictory because The person will be traditional and modern, atheist and ascetic. The person will be able to change himself according to the environment. The person will be an introvert and will not expose what The person is planning or thinking. The person will take sudden decisions and will surprise everyone with that. The person will have qualities like self-discipline, frugality in spending money, responsibility, maturity, and dedication to hard work and sobriety. his or her main drawbacks will be egoism, pessimism, nervousness and garrulousness.~Usually a person born under Aquarius or Kumbha rashi will be humanitarian, liberal, gentle, will be a well-wisher of people and will have a progressive nature. The person will have an honest and firm nature. The person will have strong desires and firm views about everything. Aquarius is a reformer Rashi and therefore the person will have revolutionary ideas, will be untraditional and will be recognized for his or her philanthropy. It will be impossible to understand what is going on in the person's mind inspite of having a long relationship with him, and even his or her friends will be unable to understand him. The person will have a philosophical mind, a serious nature and will be softhearted. The person will be intelligent and will have a sharp memory. The person will be logical and will try to clear differences through logical thinking. The person will be skilled at getting his or her work done and have an amazing work style. The person will be a lover of solitude, will be interested in meditation and worship. The person will meet everyone with politeness, praise their qualities and criticize them behind their back. The person will give importance to secrecy- nobody can easily know what is going in his or her mind, what The person's thinking or what The person's doing. The person will be skilled at accomplishing his or her hidden plans. The person will not be short-tempered but if The person gets enraged The person may get violent.~Usually a person born under Pisces or Meena Rashi will be of mediocre height, will have a wide face, prominent ear bone, beautiful physique and attractive eyes and hair. Lord of Pisces is Jupiter, therefore, the person will be respectful, religious minded, interested in occult sciences and interested in the research of the unknown and supernatural powers. The person will be independent minded, respectful towards his or her teachers and will be hospitable to guests. The person will be thoughtful about self-benefit as well as benefit to others. The person will be basically an idealistic person but The person will stay far away from worldly activities and will always live in his or her dreams. The person will have a developed power of imagination but The person will not be successful in materializing it. The person will be very sensitive and very impressionable and easily influenced by others. The person enjoys water, will be fond of bathing and will be fond of sea journeys, and will be happy to live in places close to the water. The person will be easily affected by beauty and will be sensitive and romantic in matters of love. The person will be desirous to live a happy and luxurious life. The person will be unable to control his or her expenditure. The person will waste valuable time in deciding between resolution - unresolution, decision - indecision, asserting and not asserting, what is to be done and what is not to be done. The person will display disbelief in many matters inspite of being capable, energetic and having a clear memory. The person will be hopeful, polite, having good friends of flexible temperament and very dependent on friends. The person will perform surprising and amazing deeds. The person will be keen on fame and wealth.";
	vinter4=vinter5a.split("~");


// Fill out the form with current date and time
function fillDate(){
	today = new Date();
	document.LunarCalc.Month.value = today.getMonth()+1;
	document.LunarCalc.Day.value = today.getDate();
	document.LunarCalc.Year.value = today.getFullYear();
	document.LunarCalc.Hour.value = today.getHours();
	document.LunarCalc.Min.value = today.getMinutes();
	zmins = today.getTimezoneOffset();
	with(Math){
		zmins /= 60;
		if(zmins < 0.0){
			var eln = document.LunarCalc.East;
			eln.checked = true;
		}
		zmins = abs(zmins);
		document.LunarCalc.ZHour.value = floor(zmins);
		document.LunarCalc.ZMin.value = (zmins - floor(zmins)) * 60;
	}	
}

function checkEntries(f){

	for(i = 0; i < 6; i++){
		var e = f.elements[i];
		if((e.name == "DST") || (e.name == "East") || (e.name == "South"))continue;
		if(isNaN(e.value) || (e.value < range[i*2] ) || ( e.value > range[i*2+1])){
			msg = "Please enter value between " 
				+ range[i*2] + " and " + range[i*2+1] 
				+ " in the " + e.name + " field";
			alert(msg);
			return true;
		}
	}
	return false;
}

function calculate(){

	if(checkEntries(document.LunarCalc))return;

	with(Math){
		var mon = floor(document.LunarCalc.Month.value);
		var day = floor(document.LunarCalc.Day.value);
		var year= floor(document.LunarCalc.Year.value);
		var hr= floor(document.LunarCalc.Hour.value);
		hr	+= floor(document.LunarCalc.Min.value)/60;
//		var tz= floor(document.LunarCalc.ZHour.value);
//		tz += floor(document.LunarCalc.ZMin.value)/60;
//		var ln= floor(document.LunarCalc.LonDeg.value);
//		ln += floor(document.LunarCalc.LonMin.value)/60;
//		var la= floor(document.LunarCalc.LatDeg.value);
//		la += floor(document.LunarCalc.LatMin.value)/60;
//		var tza= document.LunarCalc.country.selectedIndex;
		var tz= document.LunarCalc.country.options[document.LunarCalc.country.selectedIndex].value;
//        alert("tz"+tz)
		var ln= tz*15;
		var la=0;
	}
	// checks for checked DST, East, South
	var dst = document.LunarCalc.DST;
	var eln = document.LunarCalc.East;
	var sla = document.LunarCalc.South;
	
	if(tz > 0.0)ln = -ln;
//	if(sla.checked)la = -la;
	if(dst.checked){
		if(ln < 0.0)tz++;
		else tz--;
	}

	jd = mdy2julian(mon,day,year);
	if(ln < 0.0)f = hr - tz;
	else f = hr + tz;
	t = (jd - 2451545 - 0.5)/36525;
	gst = ut2gst(t,f);
	t = ((jd - 2451545) + f/24 - 0.5)/36525;
	ay = calcayan(t);

	ob = 23.452294 - 0.0130125 * t; //  Obliquity of Ecliptic
	
	// Calculate Moon longitude, latitude, and distance using truncated Chapront algorithm
	
	// Moon mean longitude
	l = (218.3164591 + 481267.88134236 * t);
	// Moon mean elongation
	d = (297.8502042 + 445267.1115168 * t); 
	// Sun's mean anomaly
	m = (357.5291092 + 35999.0502909 * t);
	// Moon's mean anomaly
	mm = (134.9634114 + 477198.8676313 * t);
	// Moon's argument of latitude
	f = (93.2720993 + 483202.0175273 * t);

 	d *= d2r; m *= d2r; mm *= d2r; f *= d2r;

	e = 1 - 0.002516 * t - 0.0000074 * t * t;

	with(Math){ 
	p =		6.288774 * sin(mm) 
			+ 1.274027 * sin(d*2-mm)
			+ 0.658314 * sin(d*2) 	
			+ 0.213618 * sin(2*mm)  
			- 0.185116 * e * sin(m) 
			- 0.114332 * sin(f*2);

	p +=	  0.058793 * sin(d*2 - mm * 2)
			+ 0.057066 * e * sin(d*2 - m - mm)
			+ 0.053322 * sin(d*2 + mm)
			+ 0.045758 * e * sin(d*2 - m) 
			- 0.040923 * e * sin(m - mm) 
			- 0.034720 * sin(d)
			- 0.030383 * e * sin(m + mm);

	p +=	  0.015327 * sin(d*2 - f*2)
			- 0.012528 * sin(mm + f*2)
			+ 0.010980 * sin(mm - f*2)
			+ 0.010675 * sin(d * 4 - mm)
			+ 0.010034 * sin(3 * mm);

	p +=	  0.008548 * sin(d * 4 - mm * 2)
			- 0.007888 * e * sin(d * 2 + m - mm)
			- 0.006766 * e * sin(d * 2 + m)
			- 0.005163 * sin(d - mm)
			+ 0.004987 * e * sin(d + m)
			+ 0.004036 * e * sin(d*2 - m + mm)
			+ 0.003994 * sin(d * 2 + mm * 2);

	b = 	  5.128122 * sin(f)
			+ 0.280602 * sin(mm+f)
			+ 0.277693 * sin(mm-f)
			+ 0.173237 * sin(d*2-f)
			+ 0.055413 * sin(d*2-mm+f)
			+ 0.046271 * sin(d*2-mm-f);

	b += 	  0.032573 * sin(2*d + f)
			+ 0.017198 * sin(2*mm + f)
			+ 0.009266 * sin(2*d + mm - f)
			+ 0.008823 * sin(2*mm - f)
			+ 0.008247 * e * sin(2*d - m - f)
			+ 0.004324 * sin(2*d - f - 2*mm);

	b += 	  0.004200 * sin(2*d +f+mm)
			+ 0.003372 * e * sin(f - m - 2 * d)
			+ 0.002472 * e * sin(2*d+f-m-mm)
			+ 0.002222 * e * sin(2*d + f - m)
			+ 0.002072 * e * sin(2*d-f-m-mm)
			+ 0.001877 * e * sin(f-m+mm);

	b += 	  0.001828 * sin(4*d-f-mm)
			- 0.001803 * e * sin(f+m)
			- 0.001750 * sin(3*f)
			+ 0.001570 * e * sin(mm-m-f)
			- 0.001487 * sin(f+d)
			- 0.001481 * e * sin(f+m+mm);

	r =		- 20905.355 * cos(mm) 
			-  3699.111 * cos(d*2-mm)
			-  2955.968 * cos(d*2) 	
			-   560.925 * cos(2*mm)  
			-    48.888 * e * cos(m) 
			-     3.149 * cos(f*2);

	r =		0.950724 + 0.051818  * cos(mm)
			+ 0.009531 * cos(2*d - mm)
			+ 0.007843 * cos(2*d)
			+ 0.002824 * cos(2*mm)
			+ 0.000857 * cos(2*d + mm)
			+ 0.000533 * e * cos(2*d - m);

	r += 	0.000401 * e * cos(2*d-m-mm)
			+ 0.000320 * e * cos(mm-m)
			- 0.000271 * cos(d)
			- 0.000264 * e * cos(m+mm)
			- 0.000198 * cos(2*f - mm)
			+ 0.000173 * cos(3 * mm);

	r += 	0.000167 * cos(4*d - mm)
			- 0.000111 * e * cos(m)
			+ 0.000103 * cos(4*d - 2*mm)
			- 0.000084 * cos(2*mm - 2*d)
			- 0.000083 * e * cos(2*d + m)
			+ 0.000079 * cos(2*d + 2*mm)
			+ 0.000072 * cos(4*d); 

	}

	l += p;
	while(l < 0.0)l += 360.0;
	while(l > 360.0)l -= 360.0;
	
	//  Parallax calculations are found in Meeus, Duffett-Smith, Astrologic Almanac (etc)
	//  Topocentric calculations are done on RA and DEC

	// start parallax calculations
	ecl2equ(l,b,ob);
	ln = -ln; // flip sign of longitude
	ln /= 15;
	ln += gst;
	while(ln < 0.0)ln += 24;
	while(ln > 24.0)ln -= 24;
	h = (ln - ra) * 15;
	with(Math){
		// calc observer latitude vars
		u = atan(0.996647 * tan(d2r *la));
		// hh = alt/6378140; // assume sea level
		s = 0.996647 * sin(u); // assume sealevel
		c = cos(u);	// + hh * cos(d2r(la)); // cos la' -- assume sea level
		r = 1/sin(d2r * r);
		dlt = atan2(c * sin(d2r*h),r * cos(d2r * dc) - c * cos(d2r* h));
		dlt *= r2d; 
		hh = h + dlt;
		dlt /= 15;
		ra -= dlt;
		dc = atan(cos(d2r * hh) * ((r * sin(d2r * dc) - s)/
			(r * cos(d2r *dc) * cos(d2r*h) - c)) );
		dc *= r2d;
	}
	equ2ecl(ra,dc,ob);
	// dasha calculations
	l += ay;
	if(l < 0.0)l += 360.0;
	if (ns4dom) {
		document.layers.div2.document.display.npmoon.value = lon2dmsz(l);
	} else {
		document.display.npmoon.value = lon2dmsz(l);
	}
	lon2zodiac(l);
		
	nk = (l * 60)/800.0;	// get nakshatra
	with(Math){
	if (ns4dom) {
		document.layers.div2.document.display.nnakshatra.value = naks[floor(nk)];
	} else {
		document.display.nnakshatra.value = naks[floor(nk)];
	}
		nl = floor(nk) % 9;
		db = 1 - (nk - floor(nk));
		bk = calcbhukti(db,nl);
		ndasha = (db * dasha[nl]) * 365.25;
		jd1 = jd + ndasha;
		d1 = nl;
	}
	pd = calcpraty(db,nl);

//	document.display.npdasha.value = lord.substr(nl*2,2) + "/" + lord.substr(bk*2,2) + "/" + lord.substr(pd*2,2);
	if (ns4dom) {
		document.layers.div2.document.display.npdasha.value = lord1.substr(nl*3,3) + "/" + lord1.substr(bk*3,3) + "/" + lord1.substr(pd*3,3);
	} else {
		document.display.npdasha.value = lord1.substr(nl*3,3) + "/" + lord1.substr(bk*3,3) + "/" + lord1.substr(pd*3,3);
	}
	nl++;
	if(nl == 9)nl = 0; 		
//	str = lord.substr(nl*2,2) + "/" + lord.substr(nl*2,2) + "  "; 	
	str = lord1.substr(nl*3,3) + "/" + lord1.substr(nl*3,3) + "  "; 	
	str += jul2mdy(jd1);
	if (ns4dom) {
		document.layers.div2.document.display.npnextdasha.value = str;		
	} else {
		document.display.npnextdasha.value = str;		
	}


	// Parallax Dasha
	pln += ay;	
	if(pln < 0.0)pln += 360.0;
//	document.display.pmoon.value = lon2dmsz(pln);		

	nk = (pln * 60)/800.0;	// get nakshatra
	with(Math){
//		document.display.pnakshatra.value = naks[floor(nk)];
		nl = floor(nk) % 9;
		db = 1 - (nk - floor(nk));

		bk = calcbhukti(db,nl);
		ndasha = (db * dasha[nl]) * 365.25;
		jd2 = jd + ndasha;
		jul2mdy(jd2);
		diff = round(abs(jd2-jd1)); // find difference in days
		if(d1 != nl){
			if(d1 < nl)
				diff = dasha[nl] * 365.25 - diff;
			else
				diff = dasha[d1] * 365.25 - diff;
			diff = round(abs(diff));
		}
		pd = calcpraty(db,nl);	
//		document.display.pdasha.value = lord.substr(nl*2,2) + "/" + lord.substr(bk*2,2)	+ "/" + lord.substr(pd*2,2);
 		
		nl++;
		if(nl == 9)nl = 0; 		
		str = lord.substr(nl*2,2) + "/" + lord.substr(nl*2,2) + "  "; 	
		str += jul2mdy(jd2);
//		document.display.pnextdasha.value = str;		
		// display difference in years, months, days
		str = "";
		x = floor(diff/365.25);
		if(x){
			str = x + " year ";
			diff -= 365.25;
		}
		x = floor(diff/30);
		if(x)str += x + " month(s) ";
		str += floor(diff % 30) + " days";
//		document.display.diff.value = str;		
	}

	// Calculate current dasha/bhukti
	// do something if it is the current or future date
	today = new Date();
	mon = today.getMonth() + 1;
	day = today.getDate();
	year = today.getFullYear();
	curjd = mdy2julian(mon,day,year);
	cd = curjd - jd1;
	d1++;
	if(d1 == 9)d1= 0;
	if (ns4dom) {
		document.layers.div2.document.display.curdasha.value = calccurdasha(cd,d1);
	} else {
		document.display.curdasha.value = calccurdasha(cd,d1);
	}
	cd = curjd - jd2;
//	document.display.curpdasha.value = calccurdasha(cd,nl);

	if (ns4dom) {
		var ns1shift = window.innerWidth;
        if (ns1shift < 730) {
		    ns1shift = 730+16;
		}
		ns1shift = ((ns1shift-730-16)/2)+3;
		document.layers.div2.moveTo(ns1shift,280);		
		document.layers.div2.visibility = "show";
	} else {
		var ie1shift = document.body.clientWidth;
        if (ie1shift < 730) {
		    ie1shift = 730;
		}
		ie1shift = ((ie1shift-730)/2)+3;
		document.all.div2.style.pixelLeft=ie1shift;	
		document.all.div2.style.pixelTop=480;
		document.all.div2.style["visibility"] = "visible";
	}
}

function calccurdasha(cd,nl)
{
// check for > 120 years
	while(cd < 0)cd += 43830;
	len = 0;
	for(i = 0; i < 9; i++){
		len += dasha[nl] * 365.25;
		if(len > cd)break;
		nl++;
		if(nl == 9)nl = 0; 
	}
	cd = len - cd;
	cd /= dasha[nl] * 365.25
	bk = calcbhukti(cd,nl);
	pd = calcpraty(cd,nl);
//	str = lord.substr(nl*2,2) + "/" + lord.substr(bk*2,2) + "/" + lord.substr(pd*2,2);
	str = lord1.substr(nl*3,3) + "/" + lord1.substr(bk*3,3) + "/" + lord1.substr(pd*3,3);
	return str;
}

function calcbhukti(db,dp)
{
	x = 1 - db; // find days elapsed
	y = 0;
	var buk = dp;
	for(i = 0; i < 9; i++){
		y += dasha[buk]/120; // percentage of period
		if(y > x)break;
		buk++;
		if(buk == 9)buk = 0;
	}
	return buk; 
}

function calcpraty(db,dp)
{
	x = 1 - db; // find days elapsed
	y = 0;
	bk1 = dp;
	for(i = 0; i < 9; i++){
		y += dasha[bk1]/120; // percentage of period
		if(y > x)break;
		bk1++;
		if(bk1 == 9)bk1 = 0;
	}
	y = y - x; // find days left over
	y = y/(dasha[bk1]/120);  // % of this bukti to go
	return calcbhukti(y,bk1);
 }

// Calculate Ayanamsa using J2000 Epoch
function calcayan(t)
{
	with(Math){
		ln = 125.0445550 - 1934.1361849 * t + 0.0020762 * t * t; // Mean lunar node
		off = 280.466449 + 36000.7698231 * t + 0.00031060 * t * t; // Mean Sun	
		off = 17.23*sin(d2r * ln)+1.27*sin(d2r * off)-(5025.64+1.11*t)*t;
		off = (off- 85886.27)/3600.0;  
	}
	return off;
}

function jul2mdy(JD)
{
	var str;
	with(Math){
		L  = floor(JD + 0.5)+68569;
 		N  = floor((4*L)/146097);
  		L  -= floor((146097*N + 3)/4);
  		IT = floor((4000*(L+1))/1461001);
  		L  -= floor((1461*IT)/4) - 31;
 		JT = floor((80*L)/2447);
  		K  = L- floor((2447*JT)/80);
  		L  = floor(JT/11);
  		JT += 2 - 12*L;
  		IK = 100*(N-49) + IT + L;
		str = "(m/d/y) ";
		str += floor(JT);		// month 
		str += "/" + floor(K);	// day
		str += "/" + floor(IK);	// year
	}
	return str;
}

function ut2gst(t,ut)
{
	t0 = 6.697374558 + (2400.051336 * t) + (0.000025862 * t * t);
	ut *= 1.002737909;
	t0 += ut;
	while(t0 < 0.0)t0 += 24;
	while(t0 > 24.0)t0 -= 24;
	return t0;
}

function ecl2equ(ln,la,ob)
{
	with(Math){
		y = asin(sin(d2r *la ) * cos(d2r * ob ) + cos(d2r *la ) * sin(d2r *ob ) * sin(d2r * ln));
		dc = r2d * y;
		y = sin(d2r *ln ) * cos(d2r * ob) - tan(d2r * la) * sin(d2r * ob);
		x = cos(d2r * ln);
		x = atan2(y,x);
		x = r2d * x;
		if(x < 0.0)x += 360;
		ra = x/15;
	}
}

function equ2ecl(ra,dc,ob)
{
	ra *= 15;
	with(Math){
		y = sin(d2r *ra) * cos(d2r * ob) + tan(d2r *dc) * sin(d2r * ob);	
		x = cos(d2r * ra);
		x = atan2(y,x);	
		x *= r2d;
		if(x < 0)x += 360;
		pln = x;
		y = asin(sin(d2r * dc) * cos(d2r * ob) - cos(d2r * dc) * sin(d2r * ob) * sin(d2r * ra));
		pla = r2d * y;
	}
}

// build string with degrees, minutes, seconds and zodiac sign from longitude
function lon2dmsz(x)
{
	with(Math){
		var d,m,s;
		x = abs(x);
		d = floor(x);
		m = (x - d);
		s = m * 60;
		m = floor(s);
		s = s - m;
		z = floor(d/30);
		d %= 30;
		str = zsign[z] + " " + d + "°" + m + "'" + floor(s * 60) + "\"";	
	}
	return str;
}	
// build string with zodiac sign from longitude
function lon2zodiac(x)
{
	with(Math){
		var d,m,s;
		x = abs(x);
		d = floor(x);
		m = (x - d);
		s = m * 60;
		m = floor(s);
		s = s - m;
		z = floor(d/30);
		d %= 30;
		str2 = d + "° " + m + "' " + floor(s * 60) + "\" " + zsign[z];
		
	if (ns4dom) {
		var nsshift = window.innerWidth;
//		alert ("clientWidth = "+nsshift);
        if (nsshift < 1024) {
		    nsshift = 1024+16;
		}
//		alert ("if less than 730 make it 730 = "+nsshift);
		nsshift = ((nsshift-1024-16)/2)+750;
//		alert ("clientwidth-730/2+350 = "+nsshift);
		document.layers.div1.moveTo(nsshift,150);		
		document.layers.div1.document.open();
		newWindow.document.write(vinter1 + ""+ zsign[z] + vinter2 + "" + vinter4[z] + "");
		document.layers.div1.document.close();
	} else {
		var ieshift = document.body.clientWidth;
//		alert ("clientWidth = "+ieshift);
        if (ieshift < 1024) {
		    ieshift = 1024;
		}
//		alert ("if less than 730 make it 730 = "+ieshift);
		ieshift = ((ieshift-1024)/2)+250;
//		alert ("clientwidth-730/2+250 = "+ieshift);
		document.all.div1.style.pixelLeft=ieshift;	
		document.all.div1.style.pixelTop=250;
		alert(vinter1 + ""+ zsign[z] + vinter2 + "" + vinter4[z] + "");
	}
	}
	return str2;
}	
function shiftToY(obj, x, y){
	if (ns4dom) {
		obj.moveTo(x,y)
	} else {
		obj.pixelLeft=x
		obj.pixelTop=y
	}
}
// calculate Julian Day from Month, Day and Year
function mdy2julian(m,d,y)
{
	with(Math){
		im = 12 * (y + 4800) + m - 3;
		j = (2 * (im - floor(im/12) * 12) + 7 + 365 * im)/12;
		j = floor(j) + d + floor(im/48) - 32083;
		if(j > 2299171)j += floor(im/4800) - floor(im/1200) + 38;
		return j;	
	}
}

// keep within 360 degrees
function fix360(v)
{
	while(v < 0.0)v += 360;
	while(v > 360)v -= 360;
	return v;
}
</script>