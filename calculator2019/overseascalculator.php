<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link type="text/css" media="all" href="../styles/CALC-STYLE.css" rel="stylesheet"><div class="calculator2019" style="background-color: #FFFFFF">    
<div class="dates">
<label>
<span class="title">בחירת תאריך יציאה</span>
<input type="text" name="date-flight" placeholder="תאריך יציאה" id="from"/>
</label>
<label>
<span class="title">תאריך חזרה מחו"ל</span>
<input type="text" name="date-back" placeholder="תאריך חזרה" id="to" />
</label>
<!--days-->	
<!--end days-->	
<label class="checkbox">
<input type="checkbox" name="etgari" />
<span class="title">מתוכנן בטיול ספורט אתגרי</span>
</label>
<label class="etgari">
<span class="title">תאריך תחילת ספורט אתגרי</span>
<input type="text" name="etgari-start" placeholder="תאריך התחלה"/>
</label>
<label class="etgari">
<span class="title">תאריך סיום ספורט אתגרי</span>
<input type="text" name="etgari-end" placeholder="תאריך סיום"/>
</label>
<label class="checkbox">
<input type="checkbox" name="ski" />
<span class="title">מתוכנן בטיול ספורט חורף</span>
</label>
<label class="ski">
<span class="title">תאריך תחילת ספורט חורף</span>
<input type="text" name="ski-start" placeholder="תאריך התחלה"/>
</label>
<label class="ski">
<span class="title">תאריך סיום ספורט חורף</span>
<input type="text" name="ski-end" placeholder="תאריך סיום"/>
</label>
</div>
<ul class="fields">
<li>
<div class="num">נוסע 1:</div>
<label class="age">
<span class="title">גיל</span>
<input type="number" pattern="[0-9]*" name="age" placeholder="גיל"/>
</label>
<label>
<span class="title">מצב רפואי</span>
<select name="medical">
<option value="0">ללא מצב רפואי</option>
<option value="1">כולל מצב רפואי</option>
</select>
</label>
<label>
<span class="title">צד ג׳</span>
<select name="gimel">
<option value="1">כולל צד ג׳</option>
<option value="0">ללא צד ג׳</option>
</select>
</label>
<label>
<span class="title">איתור וחילוץ</span>
<select name="rescue">
<option value="1">כולל איתור וחילוץ</option>
<option value="0">ללא איתור וחילוץ</option>
</select>
</label>
<label>
<span class="title">כבודה</span>
<select name="luggage">
<option value="0">ללא כבודה</option>
<option value="1">כולל כבודה</option>
</select>
</label>
<label>
<span class="title">ביטול או קיצור נסיעה</span>
<select name="flightcancle">
<option value="0">ללא ביטול או קיצור נסיעה</option>
<option value="1">כולל קיצור או ביטול נסיעה</option>
</select>
</label>
<label>
<span class="title">הריון</span>
<select name="pregnant">
<option value="0">ללא כיסוי הריון</option>
<option value="1">כולל כיסוי הריון</option>
</select>
</label>
<label>
<span class="title">טלפון נייד</span>
<select name="phone">
<option value="0">ללא כיסוי לטלפון</option>
<option value="1">כולל כיסוי לטלפון</option>
</select>
</label>
<label>
<span class="title">לפטופ</span>
<select name="laptop">
<option value="0">ללא כיסוי לפטופ</option>
<option value="1">כולל כיסוי לפטופ</option>
</select>
</label>
</li>
</ul>
<button id="addperson">+ הוספת נוסע</button>
<div class="button">
<button id="calculate">חישוב עלות ביטוח</button>
</div>
<div class="results tablewrap"></div>
<div class="info tablewrap">
<div class="tablewrap-inner">
<table>
<tr>
<th><img src="insurance-calculator/images/ar.jpg" alt="רכישת ביטוח חול"  /></th>
<th class="buy"><a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><p  class="buy">הראל לרכישה ישירה</p></a></th>
<th class="buy"><a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><p  class="buy">הראל לרכישה ישירה</p></a></th>
<th class="buy"><a href="https://sites.migdal.co.il/NahalApp/#/nahal/newPolicy/firstStep?id=201" title="מגדל ביטוח נסיעות לחו&quot;ל" target="new"><p class="buy">מגדל לרכישה ישירה</p></a></th>
<th class="buy"><a href="https://online.fnx.co.il/Travel/?fnx_ANum=L9sXObxg984%3d&referrer=insurance-online.co.il#" title="ביטוח נסיעות לחו&quot;ל פניקס" target="new"  ><p  class="buy">הפניקס לרכישה ישירה</p></a></th>
<th class="buy"><a href="https://purchase.passportcard.co.il/existing?AffiliateId=a9SzUY8MyfY3QxofVY21vQ%3D%3D" title="פספורט קארד ביטוח נסיעות לחו&quot;ל" target="new"><p  class="buy">פספורט  לרכישה ישירה</p></a></th>
<th class="buy"><a href="https://apps.menoramivt.co.il/TopTravel/?agentNum=910140#miniSite" title="מנורה ביטוח נסיעות לחו&quot;ל" target="new"><p  class="buy">מנורה לרכישה ישירה</p></a></th>
<th class="buy"><a  href="CLAL_TRAVEL_INSURANCE-ביטוח_לחול.html" title="ביטוח נסיעות לחו&quot;ל כלל" target="new"><p  class="buy">כלל לרכישה ישירה</p></a></th>
</tr>
<tr>
<th>חברה</th>
<th><a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
title="הראל ביטוח נסיעות לחו&quot;ל"><img src="img/svg/harel.svg" alt="ביטוח חול השוואה" /></a></th>
<th><a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><img src="calculator2019/images/harelusa.png" alt="ביטוח חול השוואה" /></a></th>
<th><a href="https://sites.migdal.co.il/NahalApp/#/nahal/newPolicy/firstStep?id=201" title="מגדל ביטוח נסיעות לחו&quot;ל" target="new"><img src="img/svg/migdal.svg" alt="ביטוח חול השוואה" /></a></th>
<th><a href="https://online.fnx.co.il/Travel/?fnx_ANum=L9sXObxg984%3d&referrer=insurance-online.co.il#" title="ביטוח נסיעות לחו&quot;ל פניקס" target="new" ><img src="img/svg/fenix.svg" alt="ביטוח נסיעות הפניקס" /></a></th>
<th><a href="https://purchase.passportcard.co.il/existing?AffiliateId=a9SzUY8MyfY3QxofVY21vQ%3D%3D" title="פספורט קארד ביטוח נסיעות לחו&quot;ל" target="new"><img src="img/svg/passportcard.svg" alt="ביטוח חול השוואה" /></a></th>
<th><a href="https://apps.menoramivt.co.il/TopTravel/?agentNum=910140#miniSite" title="מנורה ביטוח נסיעות לחו&quot;ל" target="new"><img src="img/svg/menora.svg" alt="" /></a></th>
<th><a  href="CLAL_TRAVEL_INSURANCE-ביטוח_לחול.html" title="ביטוח נסיעות לחו&quot;ל כלל" target="new"><img src="img/svg/clal.svg" alt="ביטוח חול השוואה" /></a></th>
</tr>
<tr  style="text-align: center">
<td>ביטוח רפואי עד </td>
<td>2,500,000</td>
<td>2,500,000</td>
<td>5,000,000</td>
<td>5,000,000</td>
<td>5,000,000</td>
<td>2,000,000</td>
<td>1,500,000</td>
</tr>
<tr>
<td>איתור וחילוץ<br>
ניתן להסיר </td>
<td colspan="2" align="center">250,000<br>
<span style="font-size: 12px; color: #F00D11;">עד 30 ימי ביטוח 0.15- ליום מעל 30 ימי ביטוח 0.55- ליום </span></td>
<td>500,000<br> <span style="font-size: 12px; color: #F00D11;">0.20- ליום</span></td>
<td>250,000<br><span style="font-size: 12px; color: #F00D11;">0.20- ליום</span></td>
<td>250,000<br> <span style="font-size: 12px; color: #F00D11;">0.20- ליום </span></td>
<td>250,000<br><span style="font-size: 12px; color: #F00D11;"> 0.43- ליום </span></td>
<td>200,000<br><span style="font-size: 12px; color: #F00D11;">0.44- ליום <br> גיל 0-18 0.22-ליום</span></td>
</tr>
<tr>
<td>צד שלישי</td>
<td colspan="2" align="center">150,000<br>
<span style="font-size: 12px; color: #F00D11;">כלול ללא עלות </span></td>
<td>100,000<br><span style="font-size: 12px; color: #F00D11;">כלול ללא עלות </span></td>
<td>250,000<br><span style="font-size: 12px; color: #F00D11;">כלול ללא עלות </span></td>
<td>100,000 <br><span style="font-size: 12px; color: #F00D11;">כלול ללא עלות </span></td>
<td>100,000 <br><span style="font-size: 12px; color: #F00D11;">0.14 - ליום </span></td>
<td>150,000<br><span style="font-size: 12px; color: #F00D11;">0.04- ליום</span></td>
</tr>

<tr>
<td >פינוי יבשתי</td>
<td>כלול</td>
<td >כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
</tr>
<tr>
<td>הטסה רפואית </td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
</tr>
<tr>
<td>פינוי אווירי/ימי</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>100,000</td>
<td>כלול</td>
<td>כלול</td>

<td>כלול</td>
</tr>
<tr>
<td>העברת גופה</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
<td>כלול</td>
</tr>
<tr>
<td>טיפול חירום שיניים</td>
<td>400</td>
<td>400</td>
<td>1000</td>
<td>כלול</td>
<td>כלול</td>
<td>550</td>
<td>600</td>
</tr>
<tr>
<td>תרופות</td>
<td>500</td>
<td>500</td>
<td>1500</td>
<td>כלול</td>
<td>400</td>
<td>1500</td>
<td>כלול</td>
</tr>
<tr>
<td>הריון שהתגלה לראשונה בחו&quot;ל</td>
<td>כלול </td>
<td>כלול </td>
<td>כלול </td>
<td>10,000</td>
<td>כלול </td>
<td>כלול </td>
<td>כלול </td>
</tr>
<tr>
<td>לינה בחו"ל מעבר לתקופת ביטוח</td>
<td>150 $ ליום</td>
<td>150 $ ליום</td>
<td>150 $ ליום עד 2,500 $</td>
<td>100 $ ליום</td>
<td>100 $ ליום</td>
<td>100 $ ליום<br> עד 3,000 $</td>
<td>100 $ ליום</td>
</tr>
<tr>

<td>המשך טיפול בארץ
עקב תאונה בחו"ל</td>
<td>עד 10,000 $</td>
<td>עד 10,000 $</td>
<td></td>
<td>ניתן לרכוש ביטוח
עד 5,000 $, <span style="color: rgba(255,28,40,1)">בעלות 10 $ לנוסע/ת</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><strong>כרטיס נסיעה<br> לישראל למבוטח</strong></td>
<td>עד 1000 $</td>
<td>עד 1000 $</td>
<td>עד 1500 $</td>
<td>עד 1500 $</td>
<td>עד 1500 $<br> עד 1000 $ למלווה</td>
<td>עד 1500 $</td>
<td>עד 1500 $ <br>עד 1500 $ למלווה</td>
</tr>
<tr>
<td>הוצאות מילוט</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>1,500</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><br>הטסת בן משפחה קרוב לחו&quot;ל</td>
<td>עד 2500 $ <br>כולל הוצאות שהייה בחו&quot;ל</td>
<td>עד 2500 $ <br>כולל הוצאות שהייה בחו&quot;ל</td>
<td>עד 1,500 $</td>
<td>עד 1,500 $</td>
<td >עד 2,000 $ + 100 $ <br>ליום הוצאות לינה עד 1,000 $</td>
<td>עד 2,000 $
+ 100 $ הוצ. נסיעה<br> + 100 $ ליום הוצ לינה עד 2,000 $
</td>
<td>עד 2,000 $ <br>
+ 100 $ ליום
</td>
</tr><tr>
<td>השתתפות עצמית</td>
<td>50 $</td>
<td>50 $</td>
<td  style="font-weight: bold"> ללא השתתפות
<br />
עצמית בהוצאות<br>רפואיות</td>
<td>ללא השתתפות עצמית</td>
<td> בעת שימוש    בכרטיס passport-<br />
card  ללא השתתפות עצמית</td>
<td style="font-weight: bold"> 30 $
</td>
<td  style="font-weight: bold">
50 $</td>  </tr>
<tr><td></td>
<td colspan="8">השוואת ביטוח נסיעות לחו"ל לצורך המחשה בלבד , בכפוף לתנאי פוליסה ביטוח נסיעות לחו"ל של כל אחת מחברות הביטוח ובכפוף למחירון חברת ביטוח כפי המופיע באתר החברה בעת רכישת ביטוח נסיעות לחו"ל באינטרנט</td>
</tr></table>
<table class="tablewrap-inner">
<tr>
<th style="background:#EFEFEF"><img src="insurance-calculator/images/ar.jpg" alt="רכישת ביטוח חול" /></th>
<th><a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><p class="buy">הראל לרכישה ישירה</p></a></th>
<th><a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><p class="buy">הראל לרכישה ישירה</p></a></th>
<th><a href="https://sites.migdal.co.il/NahalApp/#/nahal/newPolicy/firstStep?id=201" title="מגדל ביטוח נסיעות לחו&quot;ל" target="new"><p class="buy">מגדל לרכישה ישירה</p></a></th>
<th><a href="https://online.fnx.co.il/Travel/?fnx_ANum=L9sXObxg984%3d&referrer=insurance-online.co.il#" title="ביטוח נסיעות לחו&quot;ל פניקס" target="new"  ><p class="buy">הפניקס לרכישה ישירה</p></a></th>
<th><a href="https://purchase.passportcard.co.il/existing?AffiliateId=a9SzUY8MyfY3QxofVY21vQ%3D%3D" title="פספורט קארד ביטוח נסיעות לחו&quot;ל" target="new"><p class="buy">פספורט  לרכישה ישירה</p></a></th>
<th><a href="https://apps.menoramivt.co.il/TopTravel/?agentNum=910140#miniSite" title="מנורה ביטוח נסיעות לחו&quot;ל" target="new"><p class="buy">מנורה לרכישה ישירה</p></a></th>
<th><a  href="CLAL_TRAVEL_INSURANCE-ביטוח_לחול.html" title="ביטוח נסיעות לחו&quot;ל כלל" target="new"><p class="buy">כלל לרכישה ישירה</p></a></th>
</tr>
<tr>
<th>חברה</th>
<th><a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><img src="img/svg/harel.svg" alt="ביטוח נסיעות" /></a></th>
<th><a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><img src="calculator2019/images/harelusa.png" alt="ביטוח נסיעות" /></a></th>
<th><a href="https://sites.migdal.co.il/NahalApp/#/nahal/newPolicy/firstStep?id=201" title="מגדל ביטוח נסיעות לחו&quot;ל" target="new"><img src="img/svg/migdal.svg" alt="ביטוח נסיעות" /></a></th>
<th><a href="https://online.fnx.co.il/Travel/?fnx_ANum=L9sXObxg984%3d&referrer=insurance-online.co.il#" title="ביטוח נסיעות לחו&quot;ל פניקס" target="new" ><img src="img/svg/fenix.svg" alt="ביטוח נסיעות" /></a></th>
<th><a href="https://purchase.passportcard.co.il/existing?AffiliateId=a9SzUY8MyfY3QxofVY21vQ%3D%3D" title="פספורט קארד ביטוח נסיעות לחו&quot;ל" target="new"><img src="img/svg/passportcard.svg" alt="ביטוח נסיעות" /></a></th>
<th><a href="https://apps.menoramivt.co.il/TopTravel/?agentNum=910140#miniSite" title="מנורה ביטוח נסיעות לחו&quot;ל" target="new"><img src="img/svg/menora.svg" alt="" /></a></th>
<th><a  href="CLAL_TRAVEL_INSURANCE-ביטוח_לחול.html" title="ביטוח נסיעות לחו&quot;ל כלל" target="new"><img src="img/svg/clal.svg" alt="ביטוח נסיעות" /></a></th>
</tr>
<tr>
<td>החמרה מחל קיימת</td>
<td>350,000</td>
<td>350,000</td>
<td>350,000</td>
<td>500,000</td>
<td>300,000</td>
<td>300,000</td>
<td>250,000</td>
</tr>
<tr>
<td> כבודה-מטען אישי אובדן  או גניבה</td>
<td>2,250</td>
<td>2,250</td>
<td>2,500</td>
<td>2,500</td>
<td>2,500</td>
<td>2,000</td>
<td>2,000</td>
</tr>
<tr>
<td>ביטול נסיעה</td>
<td>5,000</td>
<td>5,000</td>
<td>6,000</td>
<td>6,000</td>
<td>4,000 / 8,000</td>
<td>6,000</td>
<td>7,000</td>
</tr>
<tr>
<td>קיצור נסיעה</td>
<td>7,000</td>
<td>7,000</td>
<td>6,000 / 12,000</td>
<td>6,000</td>
<td>4,000</td>
<td>6,000</td>
<td>8,000</td>
</tr>
<tr>
<td>הריון <br><span>תעריף ליום</span></td>
<td>350,000<br><span style="color: #E01118">6.50$<br>ארה&quot; 8.50 $</span></td>
<td>350,000<br><span style="color: #E01118">6.50$<br>ארה&quot; 8.50 $</span></td>
<td>200,000<br><span style="color: #E01118">4 $</span></td>
<td>300,000<br><span style="color: #E01118">3.00$</span></td>
<td>200,000<br><span style="color: #E01118">5 $</span></td>
<td>300,000<br><span style="color: #E01118">4.40$<br>ארה&quot; 7.48 $</span></td>
<td>200,000<br><span style="color: #E01118">7.5 $</span></td>
</tr>
<tr>
<td>ספורט אתגרי <span style="color: #E01118">תעריף ליום</span></td>
<td>1.00 $ ליום</td>
<td>1,00 $ ליום</td>
<td>0,60 $ ליום<br /></td>
<td>0,50 $ ליום</td>
<td>0.50 $,  ליום<br>מעל 30 יום 1.00$</td>
<td>1,00 $ ליום</td>
<td>0.46 $ ליום</td>
</tr>
<tr>
<td>ספורט תחרותי </td>
<td>אין</td>
<td>אין</td>
<td>2.50 $ ליום <br>מקסימום 20 $</td>
<td>25 $ לכל התקופה</td>
<td>פנייה טלפונית</td>
<td>אין</td>
<td>אין</td>
</tr>
<tr>
<td>ספורט חורף - סקי <span style="color: #E01118">תעריף ליום</span></td>
<td>9.50 $  ליום</td>
<td>9.50 $  ליום</td>
<td>6.50 $  ליום</td>
<td>7.00 $  ליום</td>
<td>7.00 $ ליום</td>
<td>4,00 $ ליום</td>
<td>6.38 $ ליום</td>
</tr>
<tr>
<td>תאונות אישיות:
מוות מתאונה / נכות מתאונה
<br><span style="color: #E01118" >תעריף ליום / גיל</span></td>
<td  colspan="2">מוות 50,000 $
אבדן אברים 13,500 $<br>
עד גיל 40 0.02 $ ליום
<br>עד גיל 50 0.10 $ ליום
<br>עד גיל 60 0.29 $ ליום
<br>עד גיל 70 0.39 $ ליום
<br>עד גיל 75 0.52 $ ליום		
</td>

<td>20,000 $ <br>0.50 $ ליום</td>
<td>גיל 18-70
50,000 $<br>0,50 $ ליום
</td>
<td>גיל 18-67
30,000 $
גיל עד 17 ומ- 68
15,000 $<br>0.70 $ ליום
</td>
<td>אין <br>- 
</td>
<td>עד ניל 75<br>0.06 $ ליום</td>
</tr>
<tr>
<td>ביטול השתתפות עצמית במקרה תאונה ברכב שכור</td>
<td  colspan="2">עד 1,500$ <br><span style="color: #E01118">6.50 $ ליום</span></td>
<td>עד 1,500 $ <br><span style="color: #E01118">6.50 $ ליום</span></td>
<td>עד 2,000 $ <br><span style="color: #E01118">פרט 6,00 $ ליום <br>קרוון  15,00 $ ליום</span></td>
<td>עד 1,500$ <br><span style="color: #E01118">8.00 $ ליום</span></td>
<td>לא קיים</td>
<td>אין</td>
</tr>
<tr>
<td>טלפון נייד</td>
<td  colspan="2">אובדן או גניבה
עד 750 $ <br><span style="color: #E01118">1,60 $ ליום </span></td>
<td>אובדן או גניבה
עד 1,000 $ $ <br><span style="color: #E01118">1,90 $ ליום </span></td>
<td>גניבה בלבד
עד 1,000 $ <br><span style="color: #E01118">1,60 $ ליום </span></td>

<td>גניבה בלבד
עד 800 $ <br><span style="color: #E01118">1,60 $ ליום </span></td>
<td>אין</td>
<td>
אובדן או גניבה
עד 2,000 $ <br><span style="color: #E01118">1,32 $ ליום </span></td>  </tr>

<tr>
<td>מחשב נייד / טאבלט</td>
<td colspan="2">אובדן או גניבה עד 2,000$<br><span style="color: #E01118">2,00 $ ליום</span>
</td>
<td>אובדן או גניבה עד 1,200$<br><span style="color: #E01118">0,80 $ ליום</span>
</td>

<td>
אובדן או גניבה	עד 2,000 $ <br><span style="color: #E01118">0,50 $ ליום </span></td>
<td>750$<br><span style="color: #E01118">0,50 $ ליום</span>
</td>


<td>
אובדן או גניבה	עד 1,200 $ <br><span style="color: #E01118">1,00 $ ליום </span></td>
<td>אובדן או גניבה עד 2,000$<br><span style="color: #E01118">1,32 $ ליום</span>
</td>
</tr>
<tr>
<td>מצלמה</td>
<td colspan="2">קיים בכבודה עד 350 $ </td>
<td  bgcolor="#F5F5F5">קיים בכבודה עד 300 $</td>
<td><span style="color: #E01118"> גניבה בלבד
<br>עד<br> 750 /1500 /2000$<br>
0.50 $/1.00 $/1.50 $ ליום </span></td>

<td><span style="color: #E01118"> גניבה בלבד
<br>עד<br> 750 /1500 /2000$<br>
0.50 $/1.00 $/1.50 $ ליום </span></td>
<td>קיים בכבודה עד 350 $ </td>
<td>קיים בכבודה עד 400 $</td>
</tr>
<tr>
<td >אופניים</td>
<td  colspan="2">אובדן או גניבה<br><span style="color: #E01118">עד 2,500 $ 1.33 $ ליום
עד 4,000 $ 2.46 $ ליום
עד 6,000 $ 3.00 $ ליום
</span>
</td>
<td><span style="color: #E01118">אין</span>
</td>

<td>נזק מתאונה<br><span style="color: #E01118">עד 2,500 $ 100 $
עד 7,500 $ 300 $
</span>
</td>
<td>אין </td>
<td>אין
</td>
<td><span style="color: #E01118">אין</span>
</td>
</tr>
<tr><td></td><td><a href="ביטוח-תרמילאים-חול-השוואה.html"
title="ביטוח נסיעות תרמילאים" target="new">
<img src="images/tarmilaim.jpg" class="tr" alt="תרמילאים ביטוח נסיעות לחו&quot;ל השוואה" title="ביטוח חול
לתרמילאים"/></a></td>
<td colspan="6">הריון - <a href="https://insurance-online.co.il/pregnancy-travel-insurance.htm">מעבר לביטוח נסיעות לחו"ל הריון</a><br />
סקי - ספורט חורף  - <a href="https://insurance-online.co.il/travel-insurance-ski.htm">מעבר לביטוח נסיעות לחו"ל סקי</a><br />
תרמילאים / ביטוח נסיעות לחו"ל לצעירים לתקופה ארוכה -  <a href="ביטוח-תרמילאים-חול-השוואה.html" title="ביטוח חול אתגרי ותרמילאים" target="new">
מעבר לביטוח נסיעות לחו"ל אתגרי</a></td>
</tr>
</table>
</div>
</div>
</div>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="calculator2019/js/custom-overseas.js"></script><script src="../insurance-calculator/plugins.js" type="text/javascript"></script>
