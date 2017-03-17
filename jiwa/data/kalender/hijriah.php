<?php

function hijriah(){
$theDate = getdate();
$wday = $theDate[wday];
$hr = $theDate[mday];
$theMonth = $theDate[mon];
$theYear = $theDate[year];
 

if (($theYear > 1582) || (($theYear == 1582) && ($theMonth > 10)) || (($theYear == 1582) && ($theMonth == 10) && ($hr > 14))) {
$zjd = (int)((1461 * ($theYear + 4800 + (int)(($theMonth - 14) / 12))) / 4) + (int)((367 * ($theMonth - 2 - 12 * ((int)(($theMonth - 14) / 12)))) / 12) - (int)((3 * (int)((($theYear + 4900 + (int)(($theMonth - 14) / 12)) / 100))) / 4) + $hr - 32075;

} else {
$zjd = 367 * $theYear - (int)((7 * ($theYear + 5001 + (int)(($theMonth - 9) / 7))) / 4) + (int)((275 * $theMonth) / 9) + $hr + 1729777;
}
 
$zl            = $zjd - 1948440 + 10632;
$zn            = (int)(($zl-1)/10631);
$zl            = $zl - 10631 * $zn + 354;
$zj            = ((int)((10985 - $zl)/5316))*((int)((50 * $zl)/17719))+((int)($zl/5670))*((int)((43 * $zl)/15238));
$zl            = $zl-((int)((30 - $zj)/15))*((int)((17719 * $zj)/50))-((int)($zj/16))*((int)((15238 * $zj)/43))+29;
$theMonth    = (int)((24 * $zl)/709);
$hijriDay    = $zl-(int)((709 * $theMonth)/24);
$hijriYear    = 30 * $zn + $zj - 30;
 

if ($theMonth==1){ $hijriMonthName = "Muharram";}
if ($theMonth==2){ $hijriMonthName = "Safar";}
if ($theMonth==3){ $hijriMonthName = "Rabiul Awal";}
if ($theMonth==4){ $hijriMonthName = "Rabiul Akhir";}
if ($theMonth==5){ $hijriMonthName = "Jamadil Awal";}
if ($theMonth==6){ $hijriMonthName = "Jamadil Akhir";}
if ($theMonth==7){ $hijriMonthName = "Rejab";}
if ($theMonth==8){ $hijriMonthName = "Syaaban";}
if ($theMonth==9){ $hijriMonthName = "Ramadhan";}
if ($theMonth==10){ $hijriMonthName = "Syawal";}
if ($theMonth==11){ $hijriMonthName = "Zulkaedah";}
if ($theMonth==12){ $hijriMonthName = "Zulhijjah";}
 

if ($wday==0) { $hijriDayString = "Al-Ahad"; }
if ($wday==1) { $hijriDayString = "Al-Itsnain"; }
if ($wday==2) { $hijriDayString = "Ats-tsulatsa'"; }
if ($wday==3) { $hijriDayString = "Al-Arbi'aa"; }
if ($wday==4) { $hijriDayString = "Al-Khomis"; }
if ($wday==5) { $hijriDayString = "Al-Jumuah"; }
if ($wday==6) { $hijriDayString = "As-Sabt"; }

 

return $hijriDayString .' ' . $hijriDay . ' ' . $hijriMonthName . ' ' . $hijriYear;

}

?>
