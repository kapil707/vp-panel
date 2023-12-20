<?php include_once(get_header("mobile")); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
          <div class="col-sm-8 text-white p-5">
            <form name=Form1>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label> Date : </label>
                  <input id=fld maxLength=2 size=2 value=1 name="Day" class="form-control">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Month : </label>
                  <select id=fld name=Month class="form-control">
                    <option value=0 selected>January</option>
                    <option value=1>February</option>
                    <option value=2>March</option>
                    <option value=3>April</option>
                    <option value=4>May</option>
                    <option value=5>June</option>
                    <option value=6>July</option> 
                    <option value=7>August</option>
                    <option value=8>September</option>
                    <option value=9>October</option>
                    <option value=10>November</option>
                    <option value=11>December</option>
                  </select> 
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label> Year : </label>
                  <input id=fld maxLength=4 size=6 value=2002 name=Year class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label> Time : </label>
                  <div class="row">
                    <div class="col-sm-6">
                      <input id=fld maxLength=2 size=2 value=0 name=Hours class="form-control">
                    </div>
                    <div class="col-sm-6">
                      <input id=fld maxLength=2 size=2 value=0 name=Minutes class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label> Zone : </label>
                  <div class="row">
                    <div class="col-sm-6">
                      <input id=fld maxLength=2 size=2 value=0 name=ZoneHour class="form-control">
                    </div>
                    <div class="col-sm-6">
                      <input id=fld maxLength=2 size=2 value=0 name=ZoneMin class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <input onclick=calculate() type=button value="Generate Panchang" name=Calculate class="main-btn flex gap-1 items-center justify-center w-full font-semibold text-center mt-6 text-white rounded-md bg-[#A17603] px-3 py-3 text-[18px]">
            </div>
            <hr style="margin-top:50px;">
            <p style="margin-top:50px;">
            Panchanga is the quality of the day, which consists of five elements - Vara (Day), Tithi (Lunar Day), Nakshatra (Star), Karana (1/60 parts of lunar month) and Yoga (1/27 parts of lunar month). Changing value of date and time in a field of the form it is possible to find most favourable time for any of undertaking.&nbsp; Accuracy of calculation +/- 1 minute.</P>
        </div>
    </div>
</div>
<?php include_once(get_footer("mobile")); ?>
<script>
// globals
d2r = Math.PI/180;
r2d = 180/Math.PI;
var month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
var zn = ["Aries","Taurus","Gemini","Cancer","Leo","Virgo","Libra","Scorpio","Sagittarius","Capricorn","Aquarius","Pisces"];
var wd = "Sunday     Monday     Tuesday    Wednesday  Thursday   Friday     Saturday   ";
var range = [1,31,0,0,-3000,4000,0,23,0,59,-12,12,0,59];
var naks = ["Asvini","Bharani","Krittika","Rohini","Mrigasira","Ardra","Punarvasu","Pusyami","Aslesa","Magha","P.Phalguni","U.Phalguni","Hasta","Citra","Swati","Visakha","Anuradha","Jyestha","Mula","P.Asadha","U.Asadha","Sravana","Dhanista","Satabhisa","P.Bhadra","U.Bhadra","Revati"];
var tith = ["Pratipad","Dwithiai","Trithiai","Chathurthi","Panchami","Shashti","Saptami","Ashtami","Navami","Dasami","Ekadasi","Dwadasi","Triodasi","Chaturdasi","Poornami","Pratipad","Dwithiai","Trithiai","Chathurthi","Panchami","Shashti","Saptami","Ashtami","Navami","Dasami","Ekadasi","Dwadasi","Triodasi","Chaturdasi","Ammavasai"];
var kar = ["Bava","Balava","Kaulava","Taitula","Garija","Vanija","Visti","Sakuna","Chatuspada","Naga","Kimstughna"];
var yog = ["Vishkambha","Prithi","Ayushman","Saubhagya","Sobhana","Atiganda","Sukarman","Dhrithi","Soola","Ganda","Vridhi","Dhruva","Vyaghata","Harshana","Vajra","Siddhi","Vyatipata","Variyan","Parigha","Siva","Siddha","Sadhya","Subha","Sukla","Bramha","Indra","Vaidhruthi"];
var tipnaks = [2,5,6,0,1,4,3,2,4,5,5,0,2,1,3,6,1,4,4,5,0,3,3,3,5,0,1];
var Lmoon, Lsun, skor, LmoonYoga, LsunYoga;
var ayanamsa = 0;
var n_wday, n_tithi, n_naksh, n_karana, n_yoga, panch, inpdate;
var s_wday, s_tithi, s_naksh, s_karana, s_yoga;
n_naksh=1, n_tithi=1;
function calculate(){
	if(checkEntries(document.forms[0]))return;

with(Math){

  var day = floor(document.forms[0].Day.value);
  var mon = floor(document.forms[0].Month.selectedIndex) +1;
  var year = floor(document.forms[0].Year.value);
  var hr = floor(document.forms[0].Hours.value);
  hr += floor(document.forms[0].Minutes.value)/60;
  var tzone = abs(floor(document.forms[0].ZoneHour.value));
  tzone += floor(document.forms[0].ZoneMin.value)/60;
}
inpmin = Math.floor(document.forms[0].Minutes.value);
if (inpmin < 10)inpmin = "0" + inpmin;
inpdate = day + ' ' + month[mon-1] + ' ' + year + ' for <font color="#990000"><b>' + Math.floor(document.forms[0].Hours.value) + ':' + inpmin + '</b></font>'

var kday,kmon,kyear,khr,kmin,ksek;

if(Math.floor(document.forms[0].ZoneHour.value)<0.0) tzone *= -1;

// Julian date on Local Time LT:
dayhr = day + hr/24;
jdlt = mdy2julian(mon,dayhr,year);

// Weekday:
n_wday = weekDay(jdlt);
s_wday = wd.substr(n_wday*11,11);

// Julian day by the beginning of day:
jd0 = mdy2julian(mon,day,year);
//jd0 = Math.floor(jdlt) + 0.5;
//if (jdlt < jd0)jd0 -= 1;

// Julian date on Universal Time UT:
jdut = jd0 + (hr - tzone)/24;                             

// Ephemeris correction:
dt = dTime(jdut);

// Julian date on Ephemeris Time ET:
jd = jdut + dt/24;

// Julian date by the beginning of day:
//jd0 = Math.floor(jd) + 0.5;
//if (jd < jd0)jd0 -= 1;

// Time in Julian centuries from epoch 1900: 
//t = (jd - 2415020)/36525;

// Time in Julian centuries from epoch 2000: 
//t = (jd - 2451545)/36525;

// Ayanamsa:
ayanamsa = calcayan(jd);                                      

// Ekliptic longitude of Moon:
Lmoon = moon(jd);

// Ekliptic longitude of Sun:
Lsun = sun(jd);

// Yoga:
dmoonYoga = (LmoonYoga + ayanamsa - 491143.07698973856);
dsunYoga = (LsunYoga + ayanamsa - 36976.91240579201);
zyoga = dmoonYoga + dsunYoga;
n_yoga = zyoga*6/80;
while(n_yoga < 0)n_yoga += 27;
while(n_yoga > 27)n_yoga -= 27;
n3=n_yoga;
n_yoga = Math.floor(n_yoga);
s_yoga = yoga(jd, zyoga, tzone);

// Nakshatra:
Lmoon0 = fix360(Lmoon + ayanamsa);
n_naksh = Math.floor(Lmoon0*6/80);
s_naksh = nakshatra(jd, n_naksh, tzone);

// Tithi:
Lmoon0 = Lmoon;
Lsun0 = Lsun;
if (Lmoon0 < Lsun0)Lmoon0 += 360;
n_tithi = Math.floor((Lmoon0 - Lsun0)/12);
s_tithi = tithi(jd, n_tithi, tzone, 12);

// Karana:
Lmoon0 = Lmoon;
Lsun0 = Lsun;
if (Lmoon0 < Lsun0)Lmoon0 += 360;
nk = Math.floor((Lmoon0 - Lsun0)/6);
if (nk == 0)n_karana = 10;
if (nk >= 57)n_karana = nk - 50;
if (nk > 0 && nk < 57)n_karana = (nk - 1) - (Math.floor((nk - 1)/7))*7;
s_karana = tithi(jd, nk, tzone, 6);

results();
}

function checkEntries(f){
   var d = Math.floor(document.forms[0].Day.value);
   var m = Math.floor(document.forms[0].Month.selectedIndex);
   var y = Math.floor(document.forms[0].Year.value);

   for(i = 0; i < 7; i++){
      var e = f.elements[i];
      if((e.name == "Day") && (isNaN(d) || (d < 1) || (d > daysInMonth(m,y)))) {
         msg = "Please enter value between 1 and " + daysInMonth(m,y) + " in the Day field";
         alert(msg);
         return true;
      }
      if(e.name == "Month")continue;
      if(isNaN(e.value) || (e.value < range[i*2] ) || ( e.value > range[i*2+1])){
         msg = "Please enter value between " + range[i*2] + " and " + range[i*2+1] + " in the " + e.name + " field";
         alert(msg);
         return true;
      }
   }
   return false;
}

function mdy2julian(m,d,y){
  with(Math){
    im = 12 * (y + 4800) + m - 3;
    j = (2 * (im - floor(im/12) * 12) + 7 + 365 * im)/12;
    j = floor(j) + d + floor(im/48) - 32083;
    if(j > 2299171)j += floor(im/4800) - floor(im/1200) + 38;
    j -=0.5;
  }
return j;
}

function daysInMonth(m,y) {
   var g_days = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
   if (((y % 4 == 0) && (y % 100 != 0)) || (y % 400 == 0)) g_days[1] = 29;
   return g_days[m];
}
function weekDay(jd)
{
jd0 = Math.floor(jd) + 0.5;
if (jd < jd0)jd0 -= 1;

jdn = jd0 + 1.5;
dn1 = Math.floor(jdn/7)*7;
wday = Math.floor(jdn - dn1);
return wday;
}
function dTime(jd)
{
// delta t from 1620 to 2010 (sec.):
var efdt = [124,85,62,48,37,26,16,10,9,10,11,11,12,13,15,16,17,17,13.7,12.5,12,7.5,5.7,7.1,7.9,1.6,-5.4,-5.9,-2.7,10.5,21.2,24,24.3,29.2,33.2,40.2,50.5,56.9,65.7,75.5];
s = calData(jd);
dgod = kyear + (kmon - 1)/12 + (kday - 1)/365.25;
t = (jd - 2378497)/36525;
if (dgod >= 1620  && dgod < 2010) {
    i1 = Math.floor((dgod - 1620)/10); 
    di = dgod - (1620 + i1*10); 
    dt = (efdt[i1] + ((efdt[i1 + 1] - efdt[i1])*di)/10);
    }
    else {
       if (dgod >= 2010) dt = 25.5 * t * t - 39;
       if (dgod >= 948 && dgod < 1620) dt = 25.5 * t * t;
       if (dgod < 948) dt = 1361.7  + 320 * t + 44.3 * t * t;
    }
dt /= 3600;
return dt;
}
function calData(jd)
{
with(Math){
z1 = jd + 0.5;
z2 = floor(z1);
f = z1 - z2;

if(z2 < 2299161)a = z2;
  else {
  alf = floor((z2 - 1867216.25)/36524.25);
  a = z2 + 1 + alf - floor(alf/4);
  }

b = a + 1524;
c = floor((b - 122.1)/365.25);
d = floor(365.25*c);
e = floor((b - d)/30.6001);

days = b - d - floor(30.6001*e) + f;
kday = floor(days);

if(e < 13.5)kmon = e - 1;
else kmon = e - 13;

if(kmon > 2.5)kyear = c - 4716;
if(kmon < 2.5)kyear = c - 4715;

hh1 = (days - kday)*24;
khr = floor(hh1);
kmin = hh1 - khr;
ksek = kmin*60;
kmin = floor(ksek);
ksek = floor((ksek - kmin)*60);
if (kday < 10)kday = " " + kday;
if (kmon < 10)kmon = "0" + kmon;
if (khr < 10)khr = "0" + khr;
if (kmin < 10)kmin = "0" + kmin;
if (ksek < 10)ksek = "0" + ksek;
s = kday + "." + kmon + "." + kyear + " " + khr + ":" + kmin;
}
return s;
}

function calcayan(jd) 
{
t = (jd - 2415020)/36525;
om = 259.183275 - 1934.142008333206 * t + 0.0020777778 * t * t + 0.0000022222222 * t * t * t;
ls = 279.696678 + 36000.76892 * t + 0.0003025 * t * t;
aya = 17.23 * Math.sin(d2r * om) + 1.27 * Math.sin(d2r * ls * 2) - (5025.64 + 1.11 * t) * t;
aya = (aya - 80861.27)/3600.0;                //  84038.27 = Fagan-Bradley, 80861.27 = Lahiri

return aya;
}

function moon(jd)
{
// Days from epoch 1900:
tdays = jd - 2415020;
// Time in Julian centuries from epoch 1900: 
t = tdays/36525;
t2 =t*t;
t3 = t*t*t;
  
// inclination of an ecliptic to equator:
ob = 23.452294 - 0.0130125 * t - 0.00000164*t2 + 0.000000503*t3;
// moon's mean longitude:
//l = 270.4341639 + 481267.8831417*t - 0.0011333333*t2 + 0.0000018888889*t3;
l = 270.4337361 + 13.176396544528099*tdays - 5.86*t2/3600 + 0.0068*t3/3600;
// elongation of moon from sun:
d = 350.7374861110581 + 445267.1142166667*t - t2*1.436111132303874e-3 + 0.0000018888889*t3;
// moon's perihel:
pe = 334.329556 + 14648522.52*t/3600 - 37.17*t2/3600 - 0.045*t3/3600;
// sun's mean anomaly:
ms = 358.4758333333334 + 35999.04974999958*t - t2*1.500000059604645e-4 - t3*3.3333333623078e-6;
// moon's mean anomaly:
//ml = 296.1046083333757 + 477198.8491083336*t + 0.0091916667090522*t2 + 0.0000143888893*t3;
ml = fix360(l - pe);
// moon's mean node:
om = 259.183275 - 6962911.23*t/3600 + 7.48*t2/3600 + 0.008*t3/3600;
// moon's mean longitude, counted from node:
//f = 11.25088888890213 + 483202.0251500002*t - t2*3.211111227671305e-3 - .00000033*t3;
f = fix360(l - om);

with(Math){
// The periodic corrections:
r2rad = 360.0 * d2r;
tb  = tdays * 1e-12;              // *10^12
t2c = tdays * tdays * 1e-16;      // *10^16
a1 = sin(r2rad * (0.53733431 -  10104982 * tb + 191 * t2c));
a2 = sin(r2rad * (0.71995354 - 147094228 * tb +  43 * t2c));
c2 = cos(r2rad * (0.71995354 - 147094228 * tb +  43 * t2c));
a3 = sin(r2rad * (0.14222222 +   1536238 * tb));
a4 = sin(r2rad * (0.48398132 - 147269147 * tb +  43 * t2c));
c4 = cos(r2rad * (0.48398132 - 147269147 * tb +  43 * t2c));
a5 = sin(r2rad * (0.52453688 - 147162675 * tb +  43 * t2c));
a6 = sin(r2rad * (0.84536324 -  11459387 * tb));
a7 = sin(r2rad * (0.23363774 +   1232723 * tb + 191 * t2c));
a8 = sin(r2rad * (0.58750000 +   9050118 * tb));
a9 = sin(r2rad * (0.61043085 -  67718733 * tb));

dlm = 0.84 * a3 + 0.31 * a7 + 14.27 * a1 + 7.261  * a2 + 0.282 * a4 + 0.237 * a6;
dpm = -2.1 * a3 - 2.076 * a2 - 0.840 * a4 - 0.593 * a6;
dkm = 0.63 * a3 + 95.96 * a2 + 15.58 * a4 + 1.86 * a5;
dls = -6.4  * a3 - 0.27 * a8 - 1.89  * a6 + 0.20 * a9;
dgc = (-4.318 * c2 - 0.698 * c4) / 3600.0 / 360.0;
dgc = (1.000002708 + 139.978 * dgc);

ml  = d2r * (ml + (dlm - dpm) / 3600.0);   //moon's mean anomaly
ms  = d2r * (ms + dls / 3600.0);           //sun's mean anomaly
f   = d2r * (f + (dlm - dkm) / 3600.0);    //moon's mean longitude, counted from node
d   = d2r * (d + (dlm - dls) / 3600.0);    //elongation of moon from sun

lk = 0; lk1 = 0; sk = 0; sinp = 0; nib = 0; g1c = 0;
i1corr = 1.0 - 6.8320e-8 * tdays;
i2corr = dgc * dgc;

for (i = 0; i < 93; i++) {                 // indignation in a longitude
    arg = corrMoon[i].mlcor * ml + corrMoon[i].mscor * ms + corrMoon[i].fcor * f + corrMoon[i].dcor * d;
    sinarg = sin(arg);
    if (corrMoon[i].mscor != 0) {
      sinarg *= i1corr;
      if  (corrMoon[i].mscor == 2 || corrMoon[i].mscor == -2)sinarg *= i1corr;
    }
    if (corrMoon[i].fcor != 0)sinarg *= i2corr;
    lk += corrMoon[i].lcor * sinarg;
}
for (i = 0; i < 27; i++) {                 // indignation in a longitude additional
    arg = corrMoon2[i].ml * ml + corrMoon2[i].ms * ms + corrMoon2[i].f * f + corrMoon2[i].d * d;
    sinarg = sin(arg);
    lk1 += corrMoon2[i].l * sinarg;
}

// Indignation from planets:
dlid =  0.822 * sin(r2rad * (0.32480 - 0.0017125594 * tdays));
dlid += 0.307 * sin(r2rad * (0.14905 - 0.0034251187 * tdays));
dlid += 0.348 * sin(r2rad * (0.68266 - 0.0006873156 * tdays));
dlid += 0.662 * sin(r2rad * (0.65162 + 0.0365724168 * tdays));
dlid += 0.643 * sin(r2rad * (0.88098 - 0.0025069941 * tdays));
dlid += 1.137 * sin(r2rad * (0.85823 + 0.0364487270 * tdays));
dlid += 0.436 * sin(r2rad * (0.71892 + 0.0362179180 * tdays));
dlid += 0.327 * sin(r2rad * (0.97639 + 0.0001734910 * tdays));

l = l + nutation(jd) + (dlm + lk + lk1 + dlid) / 3600.0;
LmoonYoga = l;
//alert("Lmoon="+l); 
l = fix360(l);
    
// Moon's angular speed (deg/day):
vl = 13.176397;
vl = vl + 1.434006*cos(ml);
vl = vl + .280135*cos(2*d);
vl = vl + .251632*cos(2*d - ml);
vl = vl + .09742*cos(2*ml);
vl = vl - .052799*cos(2*f);
vl = vl + .034848*cos(2*d + ml);
vl = vl + .018732*cos(2*d - ms);
vl = vl + .010316*cos(2*d - ms - ml);
vl = vl + .008649*cos(ms - ml);
vl = vl - .008642*cos(2*f + ml);
vl = vl - .007471*cos(ms + ml);
vl = vl - .007387*cos(d);
vl = vl + .006864*cos(3*ml);
vl = vl + .00665*cos(4*d - ml);
vl = vl + .003523*cos(2*d + 2*ml);
vl = vl + .003377*cos(4*d - 2*ml);
vl = vl + .003287*cos(4*d);
vl = vl - .003193*cos(ms);
vl = vl - .003003*cos(2*d + ms);
vl = vl + .002577*cos(ml - ms + 2*d);
vl = vl - .002567*cos(2*f - ml);
vl = vl - .001794*cos(2*d - 2*ml);
vl = vl - .001716*cos(ml - 2*f - 2*d);
vl = vl - .001698*cos(2*d + ms - ml);
vl = vl - .001415*cos(2*d + 2*f);
vl = vl + .001183*cos(2*ml - ms);
vl = vl + .00115*cos(d + ms);
vl = vl - .001035*cos(d + ml);
vl = vl - .001019*cos(2*f + 2*ml);
vl = vl - .001006*cos(ms + 2*ml);
}      
skor = vl;
//l += ay;
//if(l < 0.0)l += 360.0;
return l;
}

function fix360(v)
{
	while(v < 0.0)v += 360.0;
	while(v > 360.0)v -= 360.0;
	return v;
}

function corr(mlcor, mscor, fcor, dcor, lcor)
{
this.mlcor = mlcor;
this.mscor = mscor;
this.fcor = fcor;
this.dcor = dcor;
this.lcor = lcor;
}

function corr2(l, ml, ms, f, d)
{
this.l = l;
this.ml = ml;
this.ms = ms;
this.f = f;
this.d = d;
}

var corrMoon = new Array();	         // main correction terms
i = 0;
//                       ml, ms,  f,   d,     l
corrMoon[i++] = new corr( 0,  0,  0,   4,     13.902);
corrMoon[i++] = new corr( 0,  0,  0,   2,   2369.912);
corrMoon[i++] = new corr( 1,  0,  0,   4,      1.979);
corrMoon[i++] = new corr( 1,  0,  0,   2,    191.953);
corrMoon[i++] = new corr( 1,  0,  0,   0,  22639.500);
corrMoon[i++] = new corr( 1,  0,  0,  -2,  -4586.465);
corrMoon[i++] = new corr( 1,  0,  0,  -4,    -38.428);
corrMoon[i++] = new corr( 1,  0,  0,  -6,     -0.393);
corrMoon[i++] = new corr( 0,  1,  0,   4,     -0.289);
corrMoon[i++] = new corr( 0,  1,  0,   2,    -24.420);
corrMoon[i++] = new corr( 0,  1,  0,   0,   -668.146);
corrMoon[i++] = new corr( 0,  1,  0,  -2,   -165.145);
corrMoon[i++] = new corr( 0,  1,  0,  -4,     -1.877);
corrMoon[i++] = new corr( 0,  0,  0,   3,      0.403);
corrMoon[i++] = new corr( 0,  0,  0,   1,   -125.154);
corrMoon[i++] = new corr( 2,  0,  0,   4,      0.213);
corrMoon[i++] = new corr( 2,  0,  0,   2,     14.387);
corrMoon[i++] = new corr( 2,  0,  0,   0,    769.016);
corrMoon[i++] = new corr( 2,  0,  0,  -2,   -211.656);
corrMoon[i++] = new corr( 2,  0,  0,  -4,    -30.773);
corrMoon[i++] = new corr( 2,  0,  0,  -6,     -0.570);
corrMoon[i++] = new corr( 1,  1,  0,   2,     -2.921);
corrMoon[i++] = new corr( 1,  1,  0,   0,   -109.673);
corrMoon[i++] = new corr( 1,  1,  0,  -2,   -205.962);
corrMoon[i++] = new corr( 1,  1,  0,  -4,     -4.391);
corrMoon[i++] = new corr( 1, -1,  0,   4,      0.283);
corrMoon[i++] = new corr( 1, -1,  0,   2,     14.577);
corrMoon[i++] = new corr( 1, -1,  0,   0,    147.687);
corrMoon[i++] = new corr( 1, -1,  0,  -2,     28.475);
corrMoon[i++] = new corr( 1, -1,  0,  -4,      0.636);
corrMoon[i++] = new corr( 0,  2,  0,   2,     -0.189);
corrMoon[i++] = new corr( 0,  2,  0,   0,     -7.486);
corrMoon[i++] = new corr( 0,  2,  0,  -2,     -8.096);
corrMoon[i++] = new corr( 0,  0,  2,   2,     -5.741);
corrMoon[i++] = new corr( 0,  0,  2,   0,   -411.608);
corrMoon[i++] = new corr( 0,  0,  2,  -2,    -55.173);
corrMoon[i++] = new corr( 0,  0,  2,  -4,      0.025);
corrMoon[i++] = new corr( 1,  0,  0,   1,     -8.466);
corrMoon[i++] = new corr( 1,  0,  0,  -1,     18.609);
corrMoon[i++] = new corr( 1,  0,  0,  -3,      3.215);
corrMoon[i++] = new corr( 0,  1,  0,   1,     18.023);
corrMoon[i++] = new corr( 0,  1,  0,  -1,      0.560);
corrMoon[i++] = new corr( 3,  0,  0,   2,      1.060);
corrMoon[i++] = new corr( 3,  0,  0,   0,     36.124);
corrMoon[i++] = new corr( 3,  0,  0,  -2,    -13.193);
corrMoon[i++] = new corr( 3,  0,  0,  -4,     -1.187);
corrMoon[i++] = new corr( 3,  0,  0,  -6,     -0.293);
corrMoon[i++] = new corr( 2,  1,  0,   2,     -0.290);
corrMoon[i++] = new corr( 2,  1,  0,   0,     -7.649);
corrMoon[i++] = new corr( 2,  1,  0,  -2,     -8.627);
corrMoon[i++] = new corr( 2,  1,  0,  -4,     -2.740);
corrMoon[i++] = new corr( 2, -1,  0,   2,      1.181);
corrMoon[i++] = new corr( 2, -1,  0,   0,      9.703);
corrMoon[i++] = new corr( 2, -1,  0,  -2,     -2.494);
corrMoon[i++] = new corr( 2, -1,  0,  -4,      0.360);
corrMoon[i++] = new corr( 1,  2,  0,   0,     -1.167);
corrMoon[i++] = new corr( 1,  2,  0,  -2,     -7.412);
corrMoon[i++] = new corr( 1,  2,  0,  -4,     -0.311);
corrMoon[i++] = new corr( 1, -2,  0,   2,      0.757);
corrMoon[i++] = new corr( 1, -2,  0,   0,      2.580);
corrMoon[i++] = new corr( 1, -2,  0,  -2,      2.533);
corrMoon[i++] = new corr( 0,  3,  0,  -2,     -0.344);
corrMoon[i++] = new corr( 1,  0,  2,   2,     -0.992);
corrMoon[i++] = new corr( 1,  0,  2,   0,    -45.099);
corrMoon[i++] = new corr( 1,  0,  2,  -2,     -0.179);
corrMoon[i++] = new corr( 1,  0, -2,   2,     -6.382);
corrMoon[i++] = new corr( 1,  0, -2,   0,     39.528);
corrMoon[i++] = new corr( 1,  0, -2,  -2,      9.366);
corrMoon[i++] = new corr( 0,  1,  2,   0,      0.415);
corrMoon[i++] = new corr( 0,  1,  2,  -2,     -2.152);
corrMoon[i++] = new corr( 0,  1, -2,   2,     -1.440);
corrMoon[i++] = new corr( 0,  1, -2,  -2,      0.384);
corrMoon[i++] = new corr( 2,  0,  0,   1,     -0.586);
corrMoon[i++] = new corr( 2,  0,  0,  -1,      1.750);
corrMoon[i++] = new corr( 2,  0,  0,  -3,      1.225);
corrMoon[i++] = new corr( 1,  1,  0,   1,      1.267);
corrMoon[i++] = new corr( 1, -1,  0,  -1,     -1.089);
corrMoon[i++] = new corr( 0,  0,  2,  -1,      0.584);
corrMoon[i++] = new corr( 4,  0,  0,   0,      1.938);
corrMoon[i++] = new corr( 4,  0,  0,  -2,     -0.952);
corrMoon[i++] = new corr( 3,  1,  0,   0,     -0.551);
corrMoon[i++] = new corr( 3,  1,  0,  -2,     -0.482);
corrMoon[i++] = new corr( 3, -1,  0,   0,      0.681);
corrMoon[i++] = new corr( 2,  0,  2,   0,     -3.996);
corrMoon[i++] = new corr( 2,  0,  2,  -2,      0.557);
corrMoon[i++] = new corr( 2,  0, -2,   2,     -0.459);
corrMoon[i++] = new corr( 2,  0, -2,   0,     -1.298);
corrMoon[i++] = new corr( 2,  0, -2,  -2,      0.538);
corrMoon[i++] = new corr( 1,  1, -2,  -2,      0.426);
corrMoon[i++] = new corr( 1, -1,  2,   0,     -0.304);
corrMoon[i++] = new corr( 1, -1, -2,   2,     -0.372);
corrMoon[i++] = new corr( 0,  0,  4,   0,      0.418);
corrMoon[i++] = new corr( 2, -1,  0,  -1,     -0.352);


var corrMoon2 = new Array();	// moon additional correction terms
i = 0;
//                          l,     ml, ms,  f,  d
corrMoon2[i++] = new corr2( 0.127,  0,  0,  0,  6);
corrMoon2[i++] = new corr2(-0.151,  0,  2,  0, -4);
corrMoon2[i++] = new corr2(-0.085,  0,  0,  2,  4);
corrMoon2[i++] = new corr2( 0.150,  0,  1,  0,  3);
corrMoon2[i++] = new corr2(-0.091,  2,  1,  0, -6);
corrMoon2[i++] = new corr2(-0.103,  0,  3,  0,  0);
corrMoon2[i++] = new corr2(-0.301,  1,  0,  2, -4);
corrMoon2[i++] = new corr2( 0.202,  1,  0, -2, -4);
corrMoon2[i++] = new corr2( 0.137,  1,  1,  0, -1);
corrMoon2[i++] = new corr2( 0.233,  1,  1,  0, -3);
corrMoon2[i++] = new corr2(-0.122,  1, -1,  0,  1);
corrMoon2[i++] = new corr2(-0.276,  1, -1,  0, -3);
corrMoon2[i++] = new corr2( 0.255,  0,  0,  2,  1);
corrMoon2[i++] = new corr2( 0.254,  0,  0,  2, -3);
corrMoon2[i++] = new corr2(-0.100,  3,  1,  0, -4);
corrMoon2[i++] = new corr2(-0.183,  3, -1,  0, -2);
corrMoon2[i++] = new corr2(-0.297,  2,  2,  0, -2);
corrMoon2[i++] = new corr2(-0.161,  2,  2,  0, -4);
corrMoon2[i++] = new corr2( 0.197,  2, -2,  0,  0);
corrMoon2[i++] = new corr2( 0.254,  2, -2,  0, -2);
corrMoon2[i++] = new corr2(-0.250,  1,  3,  0, -2);
corrMoon2[i++] = new corr2(-0.123,  2,  0,  2,  2);
corrMoon2[i++] = new corr2( 0.173,  2,  0, -2, -4);
corrMoon2[i++] = new corr2( 0.263,  1,  1,  2,  0);
corrMoon2[i++] = new corr2( 0.130,  3,  0,  0, -1);
corrMoon2[i++] = new corr2( 0.113,  5,  0,  0,  0);
corrMoon2[i++] = new corr2( 0.092,  3,  0,  2, -2);

function nutation(jd)
{
t = (jd - 2415020)/36525;
t2 =t*t;
  
ls = 279.6967 + 36000.7689*t + 0.000303*t2;
l = 270.4341639 + 481267.8831417*t - 0.0011333333*t2;
ms = 358.4758333333334 + 35999.04974999958*t - t2*1.500000059604645e-4;
ml = 296.1046083333757 + 477198.8491083336*t + 0.0091916667090522*t2;
d = 350.7374861110581 + 445267.1142166667*t - t2*1.436111132303874e-3;
om = 259.1832750002543 - 1934.142008333206*t + .0020777778*t2;
ls *= d2r; l *= d2r; ms *= d2r; ml *= d2r; d *= d2r; om *= d2r;
d2 =d*d; l2 = l*l; ls2 = ls*ls;

with(Math){
      nut = (-17.2327 - 0.01737 * t) * sin(om);
      nut += 0.2088 * sin(2.0 * om);
      nut += 0.0675 * sin(ml);
      nut -= 0.0149 * sin(ml - d2);
      nut -= 0.0342 * sin(l2 - om);
      nut += 0.0114 * sin(l2 - ml);
      nut -= 0.2037 * sin(l2);
      nut -= 0.0261 * sin(l2 + ml);
      nut += 0.0124 * sin(ls2 - om);
      nut += 0.0214 * sin(ls2 - ms);
      nut -= 1.2729 * sin(ls2);
      nut -= 0.0497 * sin(ls2 + ms);
      nut += 0.1261 * sin(ms);
      nut = nut/3600.0;
}
return nut;
}

function sun(jd)
{
// Days from epoch 1900:
tdays = jd - 2415020;
// Time in Julian centuries from epoch 1900: 
t = tdays/36525;
t2 =t*t;
t3 = t*t*t;
  
// sun's mean longitude:
//ls = 279.696678 + 36000.76892*t + 0.0003025*t2;
ls = 279.696678 + 0.9856473354*tdays + 1.089*t2/3600;
// sun's perihel:
pes = 101.220833 + 6189.03*t/3600 + 1.63*t2/3600 + 0.012*t3/3600;
// sun's mean anomaly:
//ms = 358.4758333333334 + 35999.04974999958*t - t2*1.500000059604645e-4 - t3*3.3333333623078e-6;
ms = fix360(ls - pes + 180);
// longperiodic terms:
//g = ms + 0.0017778 * Math.sin((231.19 + 20.2*t)*d2r) + 0.00052278 * Math.sin((57.24 + 150.27*t)*d2r);
g = ms + (0.266 * Math.sin((31.8 + 119.0*t)*d2r) + 6.40 * Math.sin((231.19 + 20.2*t)*d2r) + (1.882-0.016*t) * Math.sin((57.24 + 150.27*t)*d2r)) / 3600.0;
// sun's mean longitude:
oms = 259.18 - 1934.142*t;
// excentricity of earth orbit:
ex = 0.01675104 - 0.0000418*t - 0.000000126*t2;
// moon's mean longitude:
l = 270.4337361 + 13.176396544528099*tdays - 5.86*t2/3600 + 0.0068*t3/3600;
// moon's mean anomaly:
ml = 296.1046083333757 + 477198.8491083336*t + 0.0091916667090522*t2 + 0.0000143888893*t3;
// mean longitude of earth:
le = 99.696678 + 0.9856473354*tdays + 1.089*t2/3600;
// moon's mean node longitude:
om = 259.183275 - 6962911.23*t/3600 + 7.48*t2/3600 + 0.008*t3/3600;

// the Kepler equation:
u = kepler(g, ex, 0.0000003)

with(Math){
// sun's true anomaly:
b = sqrt((1 + ex) / (1 - ex));
if (abs(Math.PI - u) < 1.0e-10) truanom = u;
  else truanom = 2.0 * atan(b * tan(u / 2));
truanom = fix360(truanom * r2d); 

u1 = (153.23 + 22518.7541 * t) * d2r;
u2 = (216.57 + 45037.5082 * t) * d2r;
u3 = (312.69 + 32964.3577 * t) * d2r;
u4 = (350.74 + 445267.1142 * t - 0.00144 * t2) * d2r;
u6 = (353.4 + 65928.71550000001 * t) * d2r;
u5 = (315.6 + 893.3 * t) * d2r;

dl = 0.00134 * cos(u1);
dl += 0.00154 * cos(u2);
dl += 0.002 * cos(u3);
dl += 0.00179 * sin(u4);
dl += 0.202 * sin(u5)/3600;

dr = 0.00000543 * sin(u1);
dr += 0.00001575 * sin(u2);
dr += 0.00001627 * sin(u3);
dr += 0.00003076 * cos(u4);
dr += 9.26999999e-06 * sin(u6);

// sun's true longitude (deg.):
il = ls + dl + truanom - ms;

// aberracion (deg):
r1 = 1.0000002 * (1 - ex * ex) / (1 + ex * cos(truanom*d2r));
rs = r1 + dr;                      // radius-vector
ab = (20.496 * (1 - ex * ex) / rs) / 3600;
ls = il + nutation(jd) - ab;     // visible longitude of sun
LsunYoga = ls;
//alert("Lsun="+ls); 
ls = fix360(ls);
}
return ls;
}

function kepler(m, ex, err)
{
//val u0, delta;

m *= d2r;
u0 = m;
err *= d2r;
delta = 1;
while (Math.abs(delta) >= err) {
    delta = (m + ex * Math.sin(u0) - u0) / (1 - ex * Math.cos(u0));
    u0 += delta;
}
return u0;
}

function yoga(jd, zyoga, tzone)
{
var s_t = "";
var flag;
jdt = jd;
z = zyoga;
var nn_yoga = new Array(2); 
nn_yoga[0] = Math.floor(z * 6 / 80) * 80 / 6;
nn_yoga[1] = (Math.floor(z * 6 / 80) + 1) * 80 / 6;
//alert(zyoga+"\r"+nn_yoga[0]+"\r"+nn_yoga[1]);
for (iyog = 0; iyog < 2; ++iyog) {
  flag = 0;
  while (flag < 1) {
    Lsun0 = sun(jdt);
    Lmoon0 = moon(jdt);
    dmoonYoga = (LmoonYoga + ayanamsa - 491143.07698973856);
    dsunYoga = (LsunYoga + ayanamsa - 36976.91240579201);
    //alert(LmoonYoga+"\r"+LsunYoga+"\r"+ayanamsa);
    z = dmoonYoga + dsunYoga;
    asp1 = nn_yoga[iyog] - z;
    //alert(asp1+"\r"+nn_yoga[iyog]+"\r"+z);
    flag = 1;	
    if (Math.abs(asp1) > 0.001) {jdt += (asp1 / (skor + 1.0145616633)); flag = 0;}
    //if (Math.abs(asp1) > 0.001) {jdt += (asp1 / skor) + (58.13 * Math.sin(asp1*d2r)); flag = 0;}
  }
  if (iyog == 0) s_t = calData(jdt + tzone/24) + "&nbsp;&nbsp;to";
  if (iyog == 1) s_t += "<br>" + calData(jdt + tzone/24);
}
return s_t;
}
function nakshatra(jd, n_naksh, tzone)
{
var s_t = "";
var flag;
jdt = jd;

for (inak = n_naksh; inak < (n_naksh + 2); ++inak) {
  n1 = fix360(inak*80/6);
  flag = 0;
  while (flag < 1) {
    Lmoon0 = fix360(moon(jdt) + ayanamsa);
    asp1 = n1 - Lmoon0;
    if (asp1 > 180) asp1 -= 360;
    if (asp1 < -180) asp1 += 360;
    flag = 1;	
    if (Math.abs(asp1) > 0.001) {jdt += (asp1 / skor); flag = 0;}
  }
  if (inak == n_naksh) s_t = calData(jdt + tzone/24) + "&nbsp;&nbsp;to";
  if (inak == (n_naksh + 1)) s_t += "<br>" + calData(jdt + tzone/24);
}
return s_t;
}
function tithi(jd, n1, tzone, len)
{
var s_t = "";
var flag;
jdt = jd;
knv = Math.floor(((jd - 2415020) / 365.25) * 12.3685);

for (itit = n1; itit < (n1 + 2); ++itit) { 
  aspect = len * itit;
  flag = 0;
  if (aspect == 0) {jdt = novolun(jd, knv); flag = 1;}
  if (aspect == 360) {jdt = novolun(jd, (knv+1)); flag = 1;}
  while (flag < 1) {
    Lsun0 = sun(jdt);
    Lmoon0 = moon(jdt);
    a = fix360(Lsun0 + aspect);
    asp1 = a - Lmoon0;
    if (asp1 > 180) asp1 -= 360;
    if (asp1 < -180) asp1 += 360;
    flag = 1;	
    //if (Math.abs(asp1) > 0.001) {jdt += (asp1 / 12.190749); flag = 0;}
    if (Math.abs(asp1) > 0.001) {jdt += (asp1 / (skor - 1)); flag = 0;}
  }
  if (itit == n1) s_t = calData(jdt + tzone/24) + "&nbsp;&nbsp;to";
  if (itit == (n1 + 1)) s_t += "<br>" + calData(jdt + tzone/24);
}
return s_t;
}
function results() {
  panch='<div align="center"><h1>Panchang</h1><font face="Courier New, Courier, mono" size="2">'+ inpdate + '</font></div><br>';
  panch+='<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"><tr bgcolor="#fcf8dd"><td width="20" height="20"><img src="<?php echo get_template_directory_uri();?>/images/Bullet2.gif" width="20" height="20"></td><td width="20" height="20">';
  panch+='<table width="100%" border="0" cellspacing="0" cellpadding="0" height="20"><tr><td align="center" bgcolor="#999999" height="1"></td></tr><tr><td align="center" height="19"><span class="text3">&nbsp;<font color="#3DB679">Moon: </font>' + lon2dmsz(fix360(Lmoon + ayanamsa)) + '</span></td></tr></table></td><td width="20" height="20"><img src="<?php echo get_template_directory_uri();?>/images/Bullet2.gif" width="20" height="20"></td></tr></table>';
  panch+='<table width="100%" border="0" cellspacing="1" cellpadding="3" align="center" bgcolor="#999999"><tr bgcolor="#fcf8dd"><td valign="middle" bgcolor="#fcf8dd" nowrap colspan="2"><font class="text3" color="#3DB679">Day:</font><br>';
  panch+='<font class="text8">' + s_wday + '</font><br></td><td valign="top" width="78%" bgcolor="#fcf8dd" colspan="2"><font class="text3">' + aDay[n_wday] + '</font></td></tr><tr bgcolor="#fcf8dd"><td valign="middle" bgcolor="#fcf8dd" nowrap colspan="2"><font class="text3" color="#3DB679">Tithi:</font><br>';
  panch+='<font class="text8">' + (n_tithi + 1) + '. ' + tith[n_tithi] + '</font><br><font class="text3" color="#666666">' + s_tithi + '</font></td><td valign="top" width="78%" colspan="2"><font class="text3">' + aTithi[n_tithi] + '</font></td></tr><tr bgcolor="#fcf8dd"><td valign="middle" bgcolor="#fcf8dd" nowrap colspan="2"><font class="text3" color="#3DB679">Nakshatra:</font><br>';
  panch+='<font class="text8">' + (n_naksh + 1) + '. ' + naks[n_naksh].nname + '</font><br><font class="text3" color="#666666">' + s_naksh + '</font></td><td valign="top" width="78%" colspan="2" bgcolor="#fcf8dd"><font class="text3">' + aNaksh[n_naksh] + '<br>' + aTipNaksh[tipnaks[n_naksh]] + '</font></td></tr><tr bgcolor="#fcf8dd"><td valign="middle" bgcolor="#fcf8dd" nowrap colspan="2"><font class="text3" color="#3DB679">Karana:</font><br>';
  panch+='<font class="text8">' + (n_karana + 1) + '. ' + kar[n_karana] + '</font><br><font class="text3" color="#666666">' + s_karana + '</font></td><td valign="top" width="78%" colspan="2"><font class="text3">' + aKaran[n_karana] + '</font></td></tr><tr bgcolor="#fcf8dd"><td valign="middle" bgcolor="#fcf8dd" nowrap colspan="2"><font class="text3" color="#3DB679">Yoga:</font><br>';
  panch+='<font class="text8">' + (n_yoga + 1) + '. ' + yog[n_yoga] + '</font><br><font class="text3" color="#666666">' + s_yoga + '</font></td><td valign="top" width="78%" colspan="2"><font class="text3">' + aYoga[n_yoga] + '</font></td></td></tr></table>';
  panch+='<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" height="20"><tr bgcolor="#fcf8dd"><td width="20" height="20"><img src="<?php echo get_template_directory_uri();?>/images/Bullet2.gif" width="20" height="20"></td><td width="500" height="20">';
  panch+='<table width="100%" border="0" cellspacing="0" cellpadding="0" height="20"><tr><td align="center" height="19"><span class="text3"><font color="#3DB679">Ayanamsa: </font>' + lon2dms(ayanamsa) + '</span></td></tr><tr><td align="center" bgcolor="#999999" height="1"></td></tr></table></td><td width="20" height="20"><img src="<?php echo get_template_directory_uri();?>/images/Bullet2.gif" width="20" height="20"></td></tr></table>';
  document.all.vvv.innerHTML=panch;
  }
  
function lon2dmsz(x)
{
	with(Math){
		var d,m,s;
		x = abs(x);
		z = floor(x / 30);
		d = floor(x);
		ss0 = round((x - d) * 3600);
		m = floor(ss0 / 60);
		s = (ss0 % 60) % 60;
		d %= 30;
		str = d + "°" + m + "'" + s + "\" " + zn[z];
	}
	return str;
}


aDay=new Array(
 "Sunday - day of life, of integrity; day of pure consciousness; holiday. Enjoy life, the Sun; pay attention to your individuality, your internal Self; get to the Nature; work related to goldsmithing, copper, trees, silk, fire; coronation. Do not be a slave of your own ego; try to not be inert or tied up; don't be lazy; don't be rude and violent.",
 "Monday - day of creativity, day of spontaneous thinking, day of prevailing feelings, of receptivity. Buy new stuff (esp. clothes, accessories and jewlery); get married; make walks; think spontaneously; adopt decisions based on feelings; look for approval from women; do things related to intuition, changes, mothers, water, milk. Don't adopt tough dececions (cause feelings are prevailing now); don't do haircut and manicure.",
 "Tuesday - day of material things; not too favourable day; superficial, rough day. Make bets, struggle for justice; do court rulings; fight :-); mind is aimed to the material things in life; do work related to metalls, ore deposits, medicine, fire, electricity; care about health; sport activities. Don't begin new things; avoid traveling; pay twice more attention if you travel; beware of injuries, quarrel, fall-outs and accidents.",
 "Wednesday - day of knowledge, of happiness, of flexibility and cognition; soft, lively, favourable day. Do refined work, shopping-sales, business, logic; begin new projects; communicate; meet old and make new friends; gain knowledge; get married; prepare medicines; do publications, press-release. Avoid too much of excitment;  avoid lie; don't bet on your balls; don't be secluded or too serious; don't be cruel or violent.",
 "Thursday - day of Master, of wisdom, of knowledge, of devotion, of children; the most favourable day in a whole week. Get married; give out gifts; do charity; be open and generous; get high knowledge, learn meditation; talk to your master, children; make shopping (esp. huge things cars, furniture, etc.); make banking, manage money; begin new education. Don't let your anger to show up; don't be greedy, light-minded or violent; don't be lazy; don't be ungrateful; don't lie.",
 "Friday - day of harmony, of completeness, of happiness, of luck, of love, of pleasures, of fine arts. Buy accessories, jewelery, clothes, flowers and any fine art or decorative things; get married; make court to the opposite sex; be a guest, be a host, invite guests; get pleasure; cook sweet food; pay attention to material things; banking; travel and do tourism. Don't sell big and important things; do not do your will today; don't be too sad; don't look forward to loneliness; don't do self-examination.",
 "Saturday - day to rest and recover; day of the soil; slow day of patience, service, work, charity. Get a rest (taking rest at the Saturday makes your life much longer); seclude yourself from the fuss; practice meditation, yoga; do things related to iron, land, farming; housing; behave yourself; take care about health. Don't do anything too important; don't begin anything new; try to stay out of feeling tired; don't put much force; don't argue; don't do haircut or manicure.");
aTithi=new Array(
 "Festivals, journeys; accepting a position; wedding; activities related to houses or estates; hair cutting.",
 "The beginning of activities related to representatives of authority; wedding; decoration with valuable jewels; starting the duty; the beginning of work.",
 "Auspicious day to start important businesses; wedding; the first music lesson; construction.",
 "Inauspicious day to start important businesses; cleaning of the house, polishing; arguments; fight with the enemies; use of weapons, fire.",
 "Auspicious day to start important businesses; wedding; healing.",
 "Construction; activities related to the houses and estates; jewelery making; starting friendship. Wedding is not very auspicious.",
 "Activities, related to transportation; wedding; music; decoration with close and ornaments; the beginning of journey; physical exercising.",
 "Auspicious day to start important businesses; sport ; studying arts; activities related to houses and estates; studying; construction.",
 "Inauspicious day for important businesses; arguments; competition; physical exercising; work with tools; risk.",
 "Auspicious day to start  important businesses; wedding; decoration with jewels; journeys; activities, related to transportation, houses and important people. Shopping for the business.",
 "Restriction  in eating, fasting; fulfilling promises; wedding; arguments; physical exercises; construction; spiritual holidays; arrival and departure; decoration of something.",
 "Fulfillment of promises; other auspicious activities (avoiding bathing oil and journeys). Wedding is not very auspicious.",
 "Auspicious day to start important businesses; wearing new clothes and jewels; struggle; fulfillment of promises.",
 "Inauspicious day for important businesses; reading scriptures; maintenance or support of something; avoid journeys and hair cutting.",
 "Auspicious day to start important businesses; constructions; accepting a position; the beginning of work; spiritual ceremonies; housework; physical activities.",
 "Festivals, journeys; accepting a position; wedding; activities related to houses or estates; hair cutting.",
 "The beginning of activities related to representatives of authority; wedding; decoration with valuable jewels; starting the duty; the beginning of work.",
 "Auspicious day to start important businesses; wedding; the first music lesson; construction.",
 "Inauspicious day to start important businesses; cleaning of the house, polishing; arguments; fight with the enemies; use of weapons, fire.",
 "Auspicious day to start important businesses; wedding; healing.",
 "Construction; activities related to the houses and estates; jewelery making; starting friendship. Wedding is not very auspicious.",
 "Activities, related to transportation; wedding; music; decoration with close and ornaments; the beginning of journey; physical exercising.",
 "Auspicious day to start important businesses; sport ; studying arts; activities related to houses and estates; studying; construction.",
 "Inauspicious day for important businesses; arguments; competition; physical exercising; work with tools; risk.",
 "Auspicious day to start  important businesses; wedding; decoration with jewels; journeys; activities, related to transportation, houses and important people. Shopping for the business.",
 "Restriction  in eating, fasting; fulfilling promises; wedding; arguments; physical exercises; construction; spiritual holidays; arrival and departure; decoration of something.",
 "Fulfillment of promises; other auspicious activities (avoiding bathing oil and journeys). Wedding is not very auspicious.",
 "Auspicious day to start important businesses; wearing new clothes and jewels; struggle; fulfillment of promises.",
 "Inauspicious day for important businesses; reading scriptures; maintenance or support of something; avoid journeys and hair cutting.",
 "Inauspicious day almost for every activity, except spiritual practice.");
aNaksh=new Array(
 "Journeys, healing; jewelry making; beginning of studying, journey; buying/selling the means of transportation.",
 "Immediate actions; cruel deeds; competition; activities, related to fire, poison; digging wells; agrarian activities.",
 "Immediate actions; competition; hot arguments; work with metals.",
 "Activities to improve health condition; wedding; money collection; construction of the buildings; all auspicious aims; first wearing of jewels.",
 "Wedding; accepting initiation; journeys; construction of the buildings; fundament.",
 "Fight with the enemies; activities with poison, fire; ghost hunting; first lessons.",
 "Healing; journey; placing the fundament; the beginning of fasts; fixing the means of transportation; beginning of agrarian business; teaching.",
 "Healing; festivals; good for all auspicious goals except wedding.",
 "Hard competition; activities, related to poison; immediate activities; the beginning of business; money change.",
 "Funeral rites; activities, related to water; wedding; war and other dangerous deeds.",
 "Forcing and other cruel deeds; construction; fights; trick.",
 "Wedding; spiritual ceremonies, vows; wearing jewels; beginning of house construction; ceremony of coming into the house.",
 "Journey; the beginning of studying; wedding; putting on new garments and ornaments; the beginning of construction of the house.",
 "Healing, activities to improve the health; activities related to architecture; starting wearing clothes and ornaments; holy ceremonies; agrarian work.",
 "Construction of the buildings; auspicious deeds; sowing the seeds; fights; producing weapons or tools; wedding.",
 "Activities, related to houses and estates; making jewels; architecture (sculpture, construction); making the means of transportation; taking medications.",
 "Weddings; the begging of vows; journey; the first driving;  all deeds related to estates are auspicious.",
 "Meeting enemies/ opponents; performing the deeds to subdue the enemies/opponents; excuses; work with fire; metallurgy.",
 "Creating parks and gardens; fight with the enemies; agreements and violating the agreements; digging wells, reservoirs of water; agrarian work; wedding.",
 "Digging wells, reservoirs of water;  agrarian work; manufacturing the religious utensils; freeing somebody; forgiving others; cruel deeds; cutting trees.",
 "Inhabitation or decoration of the house or estate; sowing the seeds; wedding.",
 "The most auspicious of all nakshatras. Construction (construction of something new); inhabitation of the house; spiritual rites; healing, improving the health.",
 "The hair cutting ceremony; holy rites; fights; buying the means of transportation; preparing the garden.",
 "Buying or manufacturing the means of transportation; activities, related to houses and estates (especially, with contracts and agreements).",
 "Architectural activities; dangerous affairs; agrarian business; buying cattle; buying, manufacturing or installing the water machines.",
 "Wedding; giving vows; installing the holy objects; the beginning of construction; christening.",
 "Construction of the buildings; making jewels; wedding; accepting vows.");
aTipNaksh=new Array(
 "Nakshatra is characterized by a steady nature. It's recommended to perform activities which is aimed at a long run results, like sowing the seeds, moving to a new house, accepting vows, placing the fundament etc. Started at that moment will bear good and steady fruits.",
 "Nakshatra has a soft spirit. Recommended activities are like friendship, wedding; procreation; wearing new clothes; dancing and art, journeys and performing holiday rites.",
 "Nakshatra's character is light. Recommended activities are trade, shopping; short journeys; physical exercising; wearing and manufacturing jewels; business start, education and teaching; taking medications.",
 "Nakshatra has a moving character. It's recommend to perform temporary deeds by their results, journeys, buying the means of transportation; the beginning of healing or fast; the beginning of renovation; teaching; gardening.",
 "Nakshatra with a rough spirit. It's recommend to perform active deeds, push forward; meeting with the enemy; the danger of accusations and fights. At this time it's auspicious to recite mystical mantras. Don't start the journey, avoid shopping.",
 "Nakshatra has a bad spirit. The danger of poisoning; destruction, fires and cheating. Don't start the journey, don't loan money. The work with fire or weapons, poison or chemicals, cutting trees, competition , risk.",
 "Nakshatra has a mixed spirit. It's possible to perform the routine activities, day-to-day duties, but it's not recommended to start new important deeds.");
aKaran=new Array(
 "Incantation, attack, improving health and power.",
 "Coronation, spiritual, brahminical and noble deeds.",
 "Wedding, choosing the bride, making friends, loving affairs, decoration.",
 "Coronation, becoming famous, activities, related to the home.",
 "The cultivation of the soil, sowing the seeds, constructing the house.",
 "Prolong actions, trade, cooperation.",
 "Inauspicious deeds, destruction, annihilation, tricks, attacking the enemies.",
 "Attack, competition, taking medications, herbs, incantation.",
 "Coronation, political and brahminical deeds, activities with the cattle.",
 "Work with immovable objects, using the power, competition, cruel deeds.",
 "Noble deeds, offerings, nutrition, auspicious rites (like weddings etc.).");
aYoga=new Array(
 "Victorious, auspicious, obtains property and wealth.",
 "Enjoyment, auspicious, well liked.",
 "Good Health, energetic, long life.",
 "comfortable, auspicious, happy life and good luck.",
 "Sexey, auspicious, fashaionable, showey.",
 "Obstacles, not auspicious, requirs prayers.",
 "Noble Deeds, auspicious, charitable and wealthy.",
 "Enjoyment of wealth, auspicious, serves the people.",
 "Quarrelsome, not auspicious, Requirs religious prayars.",
 "Difficult situations, not auspicious, requires religious prayars.",
 "Intelligent, auspicious, Improvement with age.",
 "Steady, auspicious, wealthy and determined.",
 "Cruel, not auspicious, harmful.",
 "Intellignt, auspicious, Delightful.",
 "Wealthy, auspicious, But forceful and unpredictable.",
 "Skillful, auspicious, accomplished and helpful.",
 "Unrealiable, not auspicious, sudden mishaps.",
 "Luxary and Ease, auspicious, Lazy.",
 "Obstacles, not auspicious, quarrelsome.",
 "Wealthy, auspicious, learned and realigious.",
 "Spiritulity, auspicious, Success.",
 "Well behaved, auspicious, Good Manners.",
 "Wealthy, auspicious, fair.",
 "Good Manners, auspicious, Talkative and impatient.",
 "Trustworthy, auspicious, ambitious.",
 "Educational, auspicious, wealthy and knowledgable.",
 "Strong, not auspicious, welthy.");
 function lon2dms(x)
{
	with(Math){
		var d,m,s;
		x = abs(x);
		d = floor(x);
		ss0 = round((x - d) * 3600);
		m = floor(ss0 / 60);
		s = (ss0 % 60) % 60;
		str = d + "°" + m + "'" + s + "\"";	
	}
	return str;
}
</script>
