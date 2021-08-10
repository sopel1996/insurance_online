<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
<link type="text/css" media="all" href="calculator2019/css/t-datepicker.min.css" rel="stylesheet">
<link type="text/css" media="all" href="calculator2019/css/t-datepicker-blue.css" rel="stylesheet">
<link type="text/css" media="all" href="calculator2019/css/style.css" rel="stylesheet">
<style>/* The Modal (background) */
    *
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 60px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.3); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 5px 16px;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    .modal-header {
        padding: 2px 16px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.2em;
        text-align: center;
        font-weight: bold;
        color: white;
        background-color: red;
    }

    .modal-footer a {
        font-size: 1em;
        color: rgba(255, 255, 255, 1.00)
    }

    .modal-footer {
        font-size: 1em;
        font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
        font-weight: bold;
        color: #FFFFFF;
        text-align: center;
        padding: 5px 16px;
        background-color: red;
    }

    .modal-content {
        direction: rtl;
        color: #080808;
        font-size: 1.2em;
        padding-right: 10px;
        font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
        font-weight: bold;
        padding-bottom: 10px
    }

    /* The Close Button */
    .close {
        float: right;
        font-size: 40px;
        font-weight: bolder;
        color: #FFFFFF
    }

    .modal-header h4 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.2em;
        text-align: center;
        font-weight: bold;
        color: #FFFFFF
    }

    .pandemic {
        color: red;
        font-size: 0.9em
    }

    .red {
        background: #FAF8B0
    }

    }
</style>
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-header">
            <h4>הבריאות שלכם חשובה לנו, הפוליסה שלנו כוללת כיסוי עבור נגיף הקורונה!</h4></div>
        <p>ביטוח חול - תקופת ביטוח מקסימלית :</p>
        <p>כל העולם למעט ארצות הברית</p>
        <ul>
            <li>עד גיל 60 - 180 יום</li>
            <li> גיל 61 - 75 - 120 יום</li>
            <li> גיל 76 - 80 - 60 יום</li>
            <li> גיל 81 - 95 - 30 יום</li>
        </ul>
        <p>נסיעה לארצות הברית :</p>
        <ul>
            <li>עד גיל 60 - 180 יום</li>
            <li> גיל 61 - 75 - 120 יום</li>
            <li> גיל 76 - 80 - 60 יום</li>
            <li> גיל 81 - 95 - 30 יום</li>
        </ul>
        <p>ביטוח חול לתרמילאים עד 6 חודשי ביטוח</p>
        <p class="pandemic">&nbsp;ביטול וקיצור נסיעה - קיימת אפשרות להרחיב הכיסוי למקרה של מגפה תמורת דמי ביטוח
            נוספים</p>
        <div class="modal-footer"><a href="https://insurance-online.co.il/contact.php" title="צור קשר"
                                     style="font-size: 1em;color: #FFFFFF;text-decoration: underline">לתקופה ארוכה יותר
                ו/או נסיעה לארה&quot;ב צור קשר או בטלפון &#x2706; : 03-6151608</a></div>
    </div>
</div>

<div class="calculator2019">
    <div class="dates">
        <div class="t-datepicker t-datepicker-flight">
            <div class="t-check-in"></div>
            <div class="t-check-out"></div>
        </div>
        <label class="checkbox">
            <input type="checkbox" name="t-datepicker-etgari"/>
            <span class="title">מתוכנן בטיול ספורט אתגרי</span>
        </label>
        <div class="t-datepicker t-datepicker-etgari" style="display: none;">
            <div class="t-check-in"></div>
            <div class="t-check-out"></div>
        </div>
        <label class="checkbox">
            <input type="checkbox" name="t-datepicker-ski"/>
            <span class="title">מתוכנן בטיול ספורט חורף</span>
        </label>
        <div class="t-datepicker t-datepicker-ski" style="display: none;">
            <div class="t-check-in"></div>
            <div class="t-check-out"></div>
        </div>
        <label class="checkbox">
            <input type="checkbox" name="t-datepicker-carrental"/>
            <span class="title">מתוכנן בטיול השכרת רכב</span>
        </label>
        <div class="t-datepicker t-datepicker-carrental" style="display: none;">
            <div class="t-check-in"></div>
            <div class="t-check-out"></div>
        </div>
        <!--
        <label>
        <span class="title">בחירת תאריך יציאה</span>
        <input type="text" name="date-flight" placeholder="תאריך יציאה"/>
        </label>
        <label>
        <span class="title">תאריך חזרה מחו"ל</span>
        <input type="text" name="date-back" placeholder="תאריך חזרה"/>
        </label>
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
        -->
    </div>
    <ul class="fields">
        <li>
            <div class="num">נוסע 1:</div>
            <label class="age">
                <span class="title">גיל</span>
                <input type="number" pattern="[0-9]*" name="age" placeholder="גיל"/>
            </label>
            <label>
                <span class="title">יעד ארה״ב</span>
                <select name="usa">
                    <option value="0">לא כולל</option>
                    <option value="1">כולל</option>
                </select>
            </label>
            <label>
                <span class="title">קורונה</span>
                <select name="tavyarok">
                    <option value="1">אחרי 2 חיסונים</option>
                    <option value="1">אחרי החלמה</option>
                    <option value="0">אחר</option>
                </select>
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
            <label>
                <span class="title">כבודה</span>
                <select name="luggage">
                    <option value="0">ללא כבודה</option>
                    <option value="1">כולל כבודה</option>
                </select>
            </label>
            <!--
            <label>
                <span class="title">רכב שכור</span>
                <select name="carrental">
                    <option value="0">ללא רכב שכור</option>
                    <option value="1">כולל רכב שכור</option>
                </select>
            </label>
            -->
            <label>
                <span class="title">ביטול נסיעה / קיצור נסיעה או הארכת שהייה</span>
                <select name="flightcancle">
                    <option value="0">ללא</option>
                    <option value="1">כלול ללא קורונה</option>
                    <option value="2">כלול כולל קורונה</option>
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
                <tr class="buy">
                    <th style="background:#EFEFEF"><img src="insurance-calculator/images/ar.jpg" alt="ביטוח חול השוואה"
                                                        width="100" height="36"/></th>
                    <th>
                        <a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
                           title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><p>הראל לרכישה ישירה</p></a></th>
                    <th><a href="https://sites.migdal.co.il/NahalApp/#/nahal/newPolicy/firstStep?id=201"
                           title="מגדל ביטוח נסיעות לחו&quot;ל" target="new"><p>מגדל לרכישה ישירה</p></a></th>
                    <th>
                        <a href="https://online.fnx.co.il/Travel/?fnx_ANum=L9sXObxg984%3d&referrer=insurance-online.co.il#"
                           title="ביטוח נסיעות לחו&quot;ל פניקס" target="new"><p>הפניקס לרכישה ישירה</p></a></th>
                    <th>
                        <a href="https://www.passportcard.co.il/Purchase?AffiliateId=a9SzUY8MyfY3QxofVY21vQ%3D%3D&langID=1"
                           title="פספורט קארד ביטוח נסיעות לחו&quot;ל" target="new"><p>פספורט קארד לרכישה ישירה</p></a>
                    </th>
                    <th><a href="https://apps.menoramivt.co.il/TopTravel/?agentNum=910140#miniSite"
                           title="מנורה ביטוח נסיעות לחו&quot;ל" target="new"><p style="color: #E01118">זמנית לא ניתן
                                לרכוש</p></a></th>
                    <th><a href="CLAL_TRAVEL_INSURANCE-ביטוח_לחול.html" title="ביטוח נסיעות לחו&quot;ל כלל"
                           target="new"><p>כלל לרכישה ישירה</p></a></th>
                </tr>
                <tr>
                    <th>חברה</th>
                    <th>
                        <a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
                           title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><img src="img/svg/harel.svg"
                                                                                  alt="ביטוח חול השוואה"/></a></th>
                    <th><a href="https://sites.migdal.co.il/NahalApp/#/nahal/newPolicy/firstStep?id=201"
                           title="מגדל ביטוח נסיעות לחו&quot;ל" target="new">&nbsp;&nbsp;<img
                                    src="img/svg/migdal.svg" alt="ביטוח חול השוואה"/></a></th>
                    <th>
                        <a href="https://online.fnx.co.il/Travel/?fnx_ANum=L9sXObxg984%3d&referrer=insurance-online.co.il#"
                           title="ביטוח נסיעות לחו&quot;ל פניקס" target="new"><img src="img/svg/fenix.svg"
                                                                                   alt="ביטוח חול השוואה"/></a></th>
                    <th>
                        <a href="https://www.passportcard.co.il/Purchase?AffiliateId=a9SzUY8MyfY3QxofVY21vQ%3D%3D&langID=1"
                           title="פספורט קארד ביטוח נסיעות לחו&quot;ל" target="new"><img
                                    src="img/svg/passportcard.svg" alt="ביטוח חול השוואה"/></a></th>
                    <th><a href="https://apps.menoramivt.co.il/TopTravel/?agentNum=910140#miniSite"
                           title="מנורה ביטוח נסיעות לחו&quot;ל" target="new"><img
                                    src="img/svg/menora.svg" alt="ביטוח חול השווא"/></a></th>
                    <th><a href="CLAL_TRAVEL_INSURANCE-ביטוח_לחול.html" title="ביטוח נסיעות לחו&quot;ל כלל"
                           target="new"><img src="img/svg/clal.svg" alt="ביטוח חול השוואה"/></a></th>
                </tr>
                <tr style="text-align: center">
                    <td>ביטוח רפואי עד לסך</td>
                    <td>5,000,000</td>
                    <td>5,000,000</td>
                    <td>ללא הגבלת סכום - Unlimited</td>
                    <td>5,000,000</td>
                    <td>2,000,000</td>
                    <td>5,000,000</td>
                </tr>
                <tr>
                    <td>איתור וחילוץ <br><span style="font-size: 12px; color: #CE073F;">
ניתן להסיר ההרחבה
</span></td>
                    <td>500,000<br> <span style="font-size: 12px; color: #F00D11;">0.20- ליום</span></td>
                    <td>500,000<br> <span style="font-size: 12px; color: #F00D11;">0.20- ליום</span></td>
                    <td>250,000<br><span style="font-size: 12px; color: #F00D11;">0.20- ליום</span></td>
                    <td>250,000<br> <span style="font-size: 12px; color: #F00D11;">0.20- ליום </span></td>
                    <td>250,000<br><span style="font-size: 12px; color: #F00D11;"> 0.43- ליום </span></td>
                    <td>200,000<br><span
                                style="font-size: 12px; color: #F00D11;">0.44- ליום <br> גיל 0-18 0.22-ליום</span></td>
                </tr>
                <tr>
                    <td>צד שלישי</td>
                    <td align="center">150,000<br>
                        <span style="font-size: 12px; color: #F00D11;">כלול ללא עלות </span></td>
                    <td align="center">150,000<br>
                        <span style="font-size: 12px; color: #F00D11;">כלול ללא עלות </span></td>
                    <td>250,000<br><span style="font-size: 12px; color: #F00D11;">כלול ללא עלות </span></td>
                    <td>100,000 <br><span style="font-size: 12px; color: #F00D11;">כלול ללא עלות </span></td>
                    <td>100,000 <br><span style="font-size: 12px; color: #F00D11;">0.14 - ליום </span></td>
                    <td>150,000<br><span style="font-size: 12px; color: #F00D11;">0.04- ליום</span></td>
                </tr>
                <tr>
                    <td>פינוי יבשתי</td>
                    <td>כלול</td>
                    <td>כלול</td>
                    <td>כלול</td>
                    <td>כלול</td>
                    <td>כלול</td>
                    <td>כלול</td>
                </tr>
                <tr>
                    <td>הטסה רפואית לארץ</td>
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
                </tr>
                <tr>
                    <td>טיפול חירום שיניים</td>
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
                    <td>1500</td>
                    <td>כלול</td>
                    <td>400</td>
                    <td>1500</td>
                    <td>כלול</td>
                </tr>
                <tr>
                    <td>הריון שהתגלה לראשונה בחו&quot;ל</td>
                    <td>כלול</td>
                    <td>כלול</td>
                    <td>10,000</td>
                    <td>כלול</td>
                    <td>כלול</td>
                    <td>כלול</td>
                </tr>
                <tr>
                    <td>לינה בחו"ל מעבר לתקופת ביטוח</td>
                    <td>150 $ ליום</td>
                    <td>150 $ ליום עד 2,500 $</td>
                    <td>100 $ ליום</td>
                    <td>100 $ ליום</td>
                    <td>100 $ ליום<br> עד 3,000 $</td>
                    <td>100 $ ליום</td>
                </tr>
                <tr>
                    <td>המשך טיפול בארץ
                        עקב תאונה בחו"ל
                    </td>
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
                    <td>עד 1500 $</td>
                    <td>עד 1500 $</td>
                    <td>עד 1500 $<br> עד 1000 $ למלווה</td>
                    <td>עד 1500 $</td>
                    <td>עד 1500 $ <br>עד 1500 $ למלווה</td>
                </tr>
                <tr>
                    <td>הוצאות מילוט</td>
                    <td>&nbsp;</td>
                    <td>1,500</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>הטסת בן משפחה קרוב לחו&quot;ל</td>
                    <td>עד 2500 $ <br>כולל הוצאות שהייה בחו&quot;ל</td>
                    <td>עד 1,500 $</td>
                    <td>עד 1,500 $</td>
                    <td>עד 2,000 $ + 100 $ <br>ליום הוצאות לינה עד 1,000 $</td>
                    <td>עד 2,000 $
                        + 100 $ הוצ. נסיעה<br> + 100 $ ליום הוצ לינה עד 2,000 $
                    </td>
                    <td>עד 2,000 $ <br>
                        + 100 $ ליום
                    </td>
                </tr>
                <tr>
                    <td>השתתפות עצמית</td>
                    <td>50 $</td>
                    <td style="font-weight: bold"> ללא השתתפות
                        <br/>
                        עצמית בהוצאות<br>רפואיות
                    </td>
                    <td>ללא השתתפות עצמית</td>
                    <td> בעת שימוש בכרטיס passport-<br/>
                        card ללא השתתפות עצמית
                    </td>
                    <td style="font-weight: bold"> 30 $
                    </td>
                    <td style="font-weight: bold">
                        50 $
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">השוואת ביטוח נסיעות לחו"ל לצורך המחשה בלבד , בכפוף לתנאי פוליסה ביטוח נסיעות לחו"ל
                        של כל אחת מחברות הביטוח ובכפוף למחירון חברת ביטוח כפי המופיע באתר החברה בעת רכישת ביטוח נסיעות
                        לחו"ל באינטרנט
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7" style="text-align: center"><h1><br/>
                            הרחבות לפוליסה ביטוח נסיעות לחו"ל תמורת דמי ביטוח נוספים
                        </h1>
                    </td>
                </tr>
                <tr class="buy">
                    <th style="background:#EFEFEF"><img src="insurance-calculator/images/ar.jpg" alt="ביטוח חול השוואה"
                                                        width="100" height="36"/></th>
                    <th>
                        <a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
                           title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><p>הראל לרכישה ישירה</p></a></th>
                    <th><a href="https://sites.migdal.co.il/NahalApp/#/nahal/newPolicy/firstStep?id=201"
                           title="מגדל ביטוח נסיעות לחו&quot;ל" target="new"><p>מגדל לרכישה ישירה</p></a></th>
                    <th>
                        <a href="https://online.fnx.co.il/Travel/?fnx_ANum=L9sXObxg984%3d&referrer=insurance-online.co.il#"
                           title="ביטוח נסיעות לחו&quot;ל פניקס" target="new"><p>הפניקס לרכישה ישירה</p></a></th>
                    <th>
                        <a href="https://www.passportcard.co.il/Purchase?AffiliateId=a9SzUY8MyfY3QxofVY21vQ%3D%3D&langID=1"
                           title="פספורט קארד ביטוח נסיעות לחו&quot;ל" target="new"><p>פספורט קארד לרכישה ישירה</p></a>
                    </th>
                    <th><a href="https://apps.menoramivt.co.il/TopTravel/?agentNum=910140#miniSite"
                           title="מנורה ביטוח נסיעות לחו&quot;ל" target="new"><p style="color: #E01118">זמנית לא ניתן
                                לרכוש</p></a></th>
                    <th><a href="CLAL_TRAVEL_INSURANCE-ביטוח_לחול.html" title="ביטוח נסיעות לחו&quot;ל כלל"
                           target="new"><p>כלל לרכישה ישירה</p></a></th>
                </tr>
                <tr>
                    <th>חברה</th>
                    <th>
                        <a href="https://travel.harel-group.co.il/abroad-policy/?guid=bee1d408-c6a7-410e-b4ee-ac690224bdd3&an=11055"
                           title="הראל ביטוח נסיעות לחו&quot;ל" target="new"><img src="img/svg/harel.svg"
                                                                                  alt="ביטוח חול השוואה"/></a></th>
                    <th><a href="https://sites.migdal.co.il/NahalApp/#/nahal/newPolicy/firstStep?id=201"
                           title="מגדל ביטוח נסיעות לחו&quot;ל" target="new">&nbsp;&nbsp;<img
                                    src="img/svg/migdal.svg" alt="ביטוח חול השוואה"/></a></th>
                    <th>
                        <a href="https://online.fnx.co.il/Travel/?fnx_ANum=L9sXObxg984%3d&referrer=insurance-online.co.il#"
                           title="ביטוח נסיעות לחו&quot;ל פניקס" target="new"><img src="img/svg/fenix.svg"
                                                                                   alt="ביטוח חול השוואה"/></a></th>
                    <th>
                        <a href="https://www.passportcard.co.il/Purchase?AffiliateId=a9SzUY8MyfY3QxofVY21vQ%3D%3D&langID=1"
                           title="פספורט קארד ביטוח נסיעות לחו&quot;ל" target="new"><img
                                    src="img/svg/passportcard.svg" alt="ביטוח חול השוואה"/></a></th>
                    <th><a href="https://apps.menoramivt.co.il/TopTravel/?agentNum=910140#miniSite"
                           title="מנורה ביטוח נסיעות לחו&quot;ל" target="new"><img
                                    src="img/svg/menora.svg" alt="ביטוח חול השווא"/></a></th>
                    <th><a href="CLAL_TRAVEL_INSURANCE-ביטוח_לחול.html" title="ביטוח נסיעות לחו&quot;ל כלל"
                           target="new"><img src="img/svg/clal.svg" alt="ביטוח חול השוואה"/></a></th>
                </tr>
                <tr>
                    <td>החמרה של מחלה קיימת</td>
                    <td>350,000</td>
                    <td>350,000</td>
                    <td>500,000</td>
                    <td>350,000</td>
                    <td>300,000</td>
                    <td>250,000</td>
                </tr>
                <tr>
                    <td> כבודה-מטען אישי אובדן או גניבה</td>
                    <td>2,250</td>
                    <td>2,500</td>
                    <td>2,500</td>
                    <td>2,500</td>
                    <td>2,000</td>
                    <td>2,000</td>
                </tr>
                <tr>
                    <td class="red">ביטול נסיעה</td>
                    <td> עד 5,000 $</td>
                    <td>עד 6,000 $</td>
                    <td>עד 6,000 $</td>
                    <td>עד 4,000 $</td>
                    <td>עד 6,000 $</td>
                    <td>עד 7,000 $</td>
                </tr>
                <tr>
                <tr>
                    <td class="red">ביטול אירוע רפואי קורונה</td>
                    <td> עד 400 $ לכרטיס טיסה</td>
                    <td>עד 400 $ לכרטיס טיסה</td>
                    <td>-</td>
                    <td>עד 500 $ לכרטיס טיסה</td>
                    <td>-</td>
                    <td>עד 5,000 $</td>
                </tr>
                <tr>
                    <td class="red">ביטול בעקבות בידוד</td>
                    <td> עד 400 $ לכרטיס טיסה</td>
                    <td>עד 400 $ לכרטיס טיסה</td>
                    <td>-</td>
                    <td>עד 500 $ לכרטיס טיסה</td>
                    <td>-</td>
                    <td>עד 500 $ לכרטיס טיסה</td>
                </tr>
                <tr>
                    <td class="red">קיצור נסיעה</td>
                    <td>עד 7,000 $</td>
                    <td>עד 6,000 $</td>
                    <td>עד 6,000 $</td>
                    <td>עד 4,000 $</td>
                    <td>עד 6,000 $</td>
                    <td>עד 8,000 $</td>
                </tr>
                <tr>
                    <td class="red">הארכה או קיצור אירוע רפואי קורונה</td>
                    <td>עד 1,000 $</td>
                    <td>עד 1,000 $</td>
                    <td>אין</td>
                    <td>אין</td>
                    <td>אין</td>
                    <td>עד 5,000 $</td>
                </tr>
                <tr>
                    <td class="red">הרחבת מגן קורונה אירוע רפואי</td>
                    <td>3,5 $ ליום<br>.</td>
                    <td>3,5 $ ליום<br>מגיל 61 - 10.6 $ ליום</td>
                    <td> תו ירוק 1,5 $ ליום<br> ללא תו ירוק 2,5 $ ליום</td>
                    <td> בעלות 2,5 $ ליום<br> ולא יותר מ - 50 $</td>
                    <td>אין</td>
                    <td>כלול ללא עלות נוספת</td>
                </tr>
                <tr>
                    <td class="red">ביטול נסיעה</td>
                    <td>עד 5,000 $</td>
                    <td>עד 5,000 $</td>
                    <td>עד 6,000 $ <br>עד 400 $ לכרטיס <br>טיסה בעקבות בידוד</td>
                    <td> עד 4,000 $</td>
                    <td>אין</td>
                    <td>כלול ללא עלות נוספת</td>
                </tr>
                <tr>
                <td class="red">קיצור או הארכת נסיעה</td>
                    <td>עד 5,000 $</td>
                    <td>עד 5,000 $</td>
                    <td>עד 3,000 $</td>
                    <td> עד 5,000 $</td>
                    <td>אין</td>
                    <td>כלול ללא עלות נוספת</td>
                </tr>
                <tr>
                    <td>הריון<br><span>תעריף ליום</span></td>
                    <td>350,000<br><span style="color: #E01118">6.50$<br>ארה&quot; 8.50 $</span></td>
                    <td>200,000<br><span style="color: #E01118">4 $</span></td>
                    <td>250,000<br><span style="color: #E01118">3.00$</span></td>
                    <td>250,000<br><span style="color: #E01118">5 $</span></td>
                    <td>300,000<br><span style="color: #E01118">4.40$<br>ארה&quot; 7.48 $</span></td>
                    <td>200,000<br><span style="color: #E01118">7.5 $</span></td>
                </tr>
                <tr>
                    <td>ספורט אתגרי <span style="color: #E01118">תעריף ליום</span></td>
                    <td>1.00 $ ליום</td>
                    <td>0,60 $ ליום<br/></td>
                    <td>0,50 $ ליום</td>
                    <td>0.50 $, ליום<br>מעל 30 יום 1.00$</td>
                    <td>1,00 $ ליום</td>
                    <td>0.46 $ ליום</td>
                </tr>
                <tr>
                    <td>ספורט תחרותי</td>
                    <td>אין</td>
                    <td>2.50 $ ליום <br>מקסימום 20 $</td>
                    <td>25 $ לכל התקופה</td>
                    <td>פנייה טלפונית</td>
                    <td>אין</td>
                    <td>אין</td>
                </tr>
                <tr>
                    <td>ספורט חורף - סקי <span style="color: #E01118">תעריף ליום</span></td>
                    <td>9.50 $ ליום</td>
                    <td>6.50 $ ליום</td>
                    <td>7.00 $ ליום</td>
                    <td>7.00 $ ליום</td>
                    <td>4,00 $ ליום</td>
                    <td>6.38 $ ליום</td>
                </tr>
                <tr>
                    <td>תאונות אישיות:
                        מוות מתאונה / נכות מתאונה
                        <br><span style="color: #E01118">תעריף ליום / גיל</span></td>
                    <td>מוות 50,000 $
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
                    <td>עד 1,500$ <br><span style="color: #E01118">6.50 $ ליום</span></td>
                    <td>עד 1,500 $ <br><span style="color: #E01118">6.50 $ ליום</span></td>
                    <td>עד 2,000 $ <br><span style="color: #E01118">פרט 6,00 $ ליום <br>קרוון  15,00 $ ליום</span></td>
                    <td>עד 1,500$ <br><span style="color: #E01118">8.00 $ ליום</span></td>
                    <td>לא קיים</td>
                    <td>אין</td>
                </tr>
                <tr>
                    <td>טלפון נייד</td>
                    <td>אובדן או גניבה
                        עד 750 $ <br><span style="color: #E01118">1,60 $ ליום </span></td>
                    <td>אובדן או גניבה
                        עד 1,000 $ $ <br><span style="color: #E01118">1,90 $ ליום </span></td>
                    <td>גניבה בלבד
                        עד 1,000 $ <br>
                        <span style="color: #E01118">0.80$ ליום </span></td>

                    <td>גניבה בלבד
                        עד 800 $ <br><span style="color: #E01118">1,60 $ ליום </span></td>
                    <td>אין</td>
                    <td>
                        אובדן או גניבה
                        עד 2,000 $ <br><span style="color: #E01118">1,32 $ ליום </span></td>
                </tr>
                <tr>
                    <td>מחשב נייד / טאבלט</td>
                    <td>אובדן או גניבה עד 2,000$<br><span style="color: #E01118">2,00 $ ליום</span>
                    </td>
                    <td>אובדן או גניבה עד 1,200$<br><span style="color: #E01118">0,80 $ ליום</span>
                    </td>

                    <td>
                        גניבה עד 2,000 $ <br><span style="color: #E01118">0,80 $ ליום </span></td>
                    <td>750$<br><span style="color: #E01118">0,50 $ ליום</span>
                    </td>
                    <td>
                        אובדן או גניבה עד 1,200 $ <br><span style="color: #E01118">1,00 $ ליום </span></td>
                    <td>אובדן או גניבה עד 2,000$<br><span style="color: #E01118">1,32 $ ליום</span>
                    </td>
                </tr>
                <tr>
                    <td>מצלמה</td>
                    <td>קיים בכבודה עד 350 $</td>
                    <td bgcolor="#F5F5F5">קיים בכבודה עד 300 $</td>
                    <td><span style="color: #E01118"> גניבה בלבד
<br>עד<br>
2000$<br>
1.00 $ ליום </span></td>
                    <td><span style="color: #E01118"> גניבה בלבד
<br>עד<br> 750 /1500 /2000$<br>
0.50 $/1.00 $/1.50 $ ליום </span></td>
                    <td>קיים בכבודה עד 350 $</td>
                    <td>קיים בכבודה עד 400 $</td>
                </tr>
                <tr>
                    <td>אופניים</td>
                    <td>אובדן או גניבה<br><span style="color: #E01118">עד 2,500 $ 1.33 $ ליום
עד 4,000 $ 2.46 $ ליום
עד 6,000 $ 3.00 $ ליום
</span>
                    </td>
                    <td><span style="color: #E01118">אין</span>
                    </td>
                    <td>נזק מתאונה<br><span style="color: #E01118">עד 2,500 $ 200 $
עד 7,500 $ 500 $
</span>
                    </td>
                    <td>אין</td>
                    <td>אין
                    </td>
                    <td><span style="color: #E01118">אין</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="8">הריון - <a href="https://insurance-online.co.il/pregnancy-travel-insurance.htm">מעבר
                            לביטוח נסיעות לחו"ל הריון</a><br/>
                        סקי - ספורט חורף - <a href="https://insurance-online.co.il/travel-insurance-ski.htm">מעבר לביטוח
                            נסיעות לחו"ל סקי</a><br/>
                        תרמילאים / ביטוח נסיעות לחו"ל לצעירים לתקופה ארוכה - <a
                                href="https://insurance-online.co.il/ביטוח-תרמילאים-חול-השוואה.html"
                                title="ביטוח חול אתגרי ותרמילאים" target="new">
                            מעבר לביטוח נסיעות לחו"ל אתגרי</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<script src="calculator2019/js/t-datepicker.js"></script>
<script src="calculator2019/js/custom.js"></script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var window = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    window.onload = function () {
        document.getElementById("myModal").style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>