
    <div id="DivIdToPrintPop">
        <script>
            function printDiv()
            {

                var divToPrint=document.getElementById('DivIdToPrintPop');

                var newWin=window.open('','Print-Window');

                newWin.document.open();

                newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

                newWin.document.close();

                setTimeout(function(){newWin.close();},10);

            }
            /* function closeWin() {
                 myWindow.close();
             }*/
        </script>

        <style>
            #abcd{
                padding-left:4.5em;
            }
            .square {
                height: 15px;
                width: 20px;
                border-radius: 5px;
                border: 1px solid black;
                background-color: transparent;
            }
            .checkk{
                display: inline-flex;
            }

        </style>

        <div class="container-fluid">
            <div class="row">
                <div style="font-family:'Kh Muol' ;font-size: 18px;padding-right: 30px;padding-left: 30px;font-size: 18px">
                    <p style="text-align: center">
                        <strong>ព្រះរាជាណាចក្រកម្ពុជា</strong>
                        <strong>ជាតិ   សាសនា    ព្រះមហាក្សត្រ</strong>
                    </p>
                    <p style="text-align: center">
                        <strong>ជាតិ   សាសនា    ព្រះមហាក្សត្រ</strong>
                    </p>
                    <p style="text-align: center; padding-left: 95px">
                        វិក័យប័ត្រកក់ប្រាក់ទ្រនាប់ដៃ
                        <strong style="font-size:16px; float: right;" >គំរោងទី ១៨</strong>
                    </p>
                </div>

                <div style="font-family:'Kh Metal Chrieng' ;font-size: 15px;padding-right: 30px;padding-left: 30px">
                    <br>
                    <p id="abcd">ខ្ញុំបាទ/នាងខ្ញុំឈ្មោះ..........................................ភេទ................................អាយុ......................ឆ្នាំ  សញ្ជាតិ..........................................</p>
                    <p>
                        តំណាងអោយម្ចាស់ដី បានទទួលប្រាក់កក់ទ្រនាប់ដៃពីអតិថិជនឈ្មោះ....................................ភេទ.................................អាយុ........................ឆ្នាំ សញ្ជាតិ................................................បានព្រមព្រៀងកក់ទ្រនាប់ដៃលើដីឡូត៍លេខ...................................ចំនួន......................................................ឡូត៍ ទំហំ.......................................ក្នុងតម្លៃ...............................តម្លៃកាត់បន្ថយចំនួន............................................តម្លៃនៅសល់.........................................ជាអក្សរៈ..............................................................................................................................................................................................................................
                        ស្ថិតនៅភូមិ............................... ឃុំ/សង្កាត់...............................ស្រុក/ខណ្ឌ..............................ខេត្ត/ក្រុង.............................។
                    </p>
                    <p id="abcd">
                        ភាគីទាំងពីរបានព្រមព្រៀងគ្នាដូចខាងក្រោមៈ
                        <br>
                        <br>១. លើកទី ១ អ្នកទិញបានកក់ប្រាក់ទ្រនាប់ដៃចំនួន....................នៅថ្ងៃទី..............ខែ...........ឆ្នាំ....................។
                        <br>២. លើកទី២ ភាគីអ្នកទិញសន្យាមកកក់ប្រាក់ចំនួន......................នៅថ្ងៃទី..............ខែ...........ឆ្នាំ...................។
                        <br>ប្រាក់កក់ទ្រនាប់ដៃនេះមានសុពលភាពត្រឹមតែរយៈ ៧ថ្ងៃប៉ុណ្ណោះ ដោយរាប់ចាប់ពីថ្ងៃផ្តិតមេដៃប្រគល់-ទទួលប្រាក់ រវាងភាគីទាំងពីរ  ។ ក្នុងករណីភាគីអ្នកលក់កែប្រែនោះប្រាក់ខាងលើ ត្រូវសងត្រឡប់ទៅវិញ មួយគុណនឹងពីរ ដងអោយទៅ អ្នកទិញ ។
                    </p>
                    <p id="abcd">
                        <br><strong>	បញ្ជាក់</strong>: ចំពោះការធ្វើកិច្ចសន្យាកក់ប្រាក់ធ្វើឡើងនៅការិយាល័យកណ្តាលតែមួយកន្លែងប៉ុណ្ណោះ។
                    </p>
                    <p style="float: right">ធ្វើនៅថ្ងៃទី….......…..ខែ…........…..ឆ្នាំ 202……</p>
                    <br><br>
                    <table>
                        <tr>
                            <td>
                                <p><strong>ស្នាមមេដៃអតិថិជន <span style="padding-left: 250px"></span></strong></p>
                            </td>
                            <td>
                                <p><strong>សាក្សីទី១ <span style="padding-left: 250px"></span></strong></p>
                            </td>
                            <td>
                                <p><strong>សាក្សីទី២ <span style="padding-left: 250px"></span></strong></p>
                            </td>
                            <td>
                                <p><strong>ស្នាមមេដៃអ្នកលក់ <span style="padding-left: 250px"></span></strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 50px">
                                <p>ឈ្មោះ.................</p>
                            </td>
                            <td style="padding-top: 50px">
                                <p>ឈ្មោះ.................</p>
                            </td>
                            <td style="padding-top: 50px">
                                <p>ឈ្មោះ.................</p>
                            </td>
                            <td style="padding-top: 50px">
                                <p>ឈ្មោះ.................</p>
                            </td>
                        </tr>
                        <tr>
                            <td>ទូរស័ព្ទលេខ៖.................................</td>
                            <td colspan="2"></td>
                            <td>ទូរស័ព្ទលេខ៖.................................</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!--           add break page -->
            <p style="page-break-after: always;">&nbsp;</p>
            <p style="page-break-before: always;">&nbsp;</p>

            <div class="row">
                <div style="font-family:'Kh Muol' ;font-size: 18px;padding-right: 30px;padding-left: 30px;font-size: 18px">
                    <p style="text-align: center">
                        <strong style="font-size:18px ">ព្រះរាជាណាចក្រកម្ពុជា</strong>
                    </p>
                    <p style="text-align: center">
                        <strong>ជាតិ   សាសនា    ព្រះមហាក្សត្រ</strong>
                    </p>

                    <p style="text-align: center; padding-left: 70px">
                        កិច្ចសន្យាកក់ប្រាក់
                        <strong style="font-size:16px; float: right;" >គំរោងទី ១៨</strong>
                    </p>
                </div>

                <div style="font-family:'Kh Metal Chrieng' ;font-size: 15px;padding-right: 30px;padding-left: 30px">
                    <p id="abcd">
                        នាងខ្ញុំឈ្មោះ <strong>ហឿន ស្រីរ័ត្ន </strong> កាន់អត្តសញ្ញាណបណ្ឌសញ្ជាតិខ្មែរលេខ  <strong>011025096</strong>   ព្រមទាំងលោក  <strong>ឡុង ណារ៉ា</strong>  កាន់អត្តសញ្ញាណបណ្ឌ សញ្ជាតិ
                    </p>
                    <p>
                        ខ្មែរលេខ៖  010155484(01)ទីលំនៅបច្ចុប្បន្នផ្ទះលេខ០១០១ខ ផ្លូវសហព័ន្ធរុស្សី ភូមិត្រពាំងឈូក សង្កាត់ទឹកថ្លា ខណ្ឌសែនសុខ ភ្នំពេញ ។ តំណាងដោយលោក.................................................
                        កាន់អត្តសញ្ញាណបណ្ឌសញ្ជាតិខ្មែរលេខ.........................................................................
                        បានព្រមព្រៀងគ្នាលក់ដីឡូត៍លេខ………...................................................................មានចំនួន....................ឡូត៍
                        ទំហំ………........………ម៉ែត្រទំហំសរុប.....................................................ម៉ែត្រក្រឡា មូយកន្លែងស្ថិតនៅ ក្នុងភូមិព្រៃផ្តៅ, ភូមិឈើទាលជ្រុំ (ដីក្រហម),
                    </p>
                    <p id="abcd"><strong>ដែលមានព្រំប្រទល់ដូចខាងក្រោម:</strong></p>
                    <p id="abcd">- ខាងជើងទល់នឹង…………...............…………………….…....- ខាងកើតទល់នឹង………………….....................………………
                        <br>- ខាងត្បូងទល់នឹង………………………..................…………...- ខាងលិចទល់នឹង………………...................………………….
                        <br>អោយទៅអតិថិជនឈ្មោះ..................................ភេទ.................កាន់អត្តសញ្ញាណបណ្ឌសញ្ជាតិខ្មែរលេខ.........................
                    </p>
                    <p>ព្រមទាំងឈ្មោះ………………………..…………….......ភេទ…....កាន់អត្តសញ្ញាប័ណ្ណសញ្ជាតិខ្មែរលេខ..................................................មានទីលំនៅបច្ចុប្បន្នផ្ទះលេខ……..………..ផ្លូវលេខ…………………………ក្រុមទី………ភូមិ…………………………………………............ឃុំ/សង្កាត់…………………ស្រុក/ខណ្ឌ……….….............…………………......ខេត្ត/ក្រុង…………………....……… ។
                        ភាគីអ្នកលក់ និង អ្នកទិញបានឯកភាពគ្នាក្នុងតំលៃដូចខាងក្រោមៈ
                    </p>
                    <p id="abcd">
                            តម្លៃ 			  ៖	.......................................................................ជាអក្សរ.........................................................................................
                        <br>(ដក) តម្លៃកាត់បន្ថយ	  ៖	..........................................ជាអក្សរ.........................................................................................
                        <br>(ដក) ប្រាក់កក់លើកទី១ចំនួន  ៖ ..............................នៅថ្ងៃទី............ខែ..................ឆ្នាំ..................។
                        <br>(ដក) ប្រាក់កក់លើកទី២ ចំនួន ៖	............................នៅថ្ងៃទី............ខែ..................ឆ្នាំ..................។
                        <br>តម្លៃនៅសល់		  ៖ .................................ជាអក្សរ.........................................................................................
                    </p>
                    <p id="abcd">
                        <div class="checkk">អតិថិនបានជ្រើសរើសលក្ខខណ្ឌបង់ប្រាក់៖  &ensp; <div class="square"></div> &ensp;  បង់រំលស់  (ចំនួនទឹកប្រាក់ដែលនៅសល់ខាងលើត្រូវបានយកមករៀបចំជាតារាង</div>
                    </p>
                    <p>កាលវិភាគរំលស់ក្នុងមួយខែចំនួន..............................................ដុល្លារ រយៈពេល .................................ខែ រហូតដល់អស់ទឹកប្រាក់គិតចាប់ពីថ្ងៃ ទី..............ខែ..................ឆ្នាំ...........តទៅ) ដោយមានកាលវិភាគបង់ប្រាក់ជាឯកសារយោង ។
                        ករណី បង់ប្រាក់យឺត 7 - 60 ថ្ងៃ ត្រូវផាកពិន័យមួយម៉ឺនរៀលសំរាប់មួយថ្ងៃ ។  បើខកខាន មិនបានបង់ចាប់ពី 61 ថ្ងៃឡើងទៅ នោះអ្នក ទិញមិនអាច ទទួលបានប្រាក់ដែលបានបង់កន្លងមកត្រឡប់មកវិញនោះទេ ហើយសុខចិត្តប្រគល់ដីជូនក្រុមហ៊ុនវិញ ដោយគ្មានការតវ៉ាអ្វីទាំងអស់ ។  បើភាគីអ្នក លក់កែប្រែមិនលក់វិញភាគីអ្នកលក់នឹងសងប្រាក់ដែលបានបង់កន្លងមកគុណនឹងពីរដងទៅភាគីអ្នកទិញវិញ ។ ភាគីទិញនិងភាគីលក់បានយល់ព្រមធ្វើ តាមគ្រប់ខ្លឹមសារ ដែលបានចែងទាំងអស់ បើអនុវត្តន៍ផ្ទុយពីនេះ យើងខ្ញុំទាំងពីរភាគី សុខចិត្តទទួលខុសត្រូវចំពោះមុខច្បាប់ជាធរមាន។
                    </p>
                    <p style="float: right">ធ្វើនៅថ្ងៃទី............ខែ.................ឆ្នាំ 202………</p>

                    <table>
                        <tr>
                            <td>
                                <p><strong>ស្នាមមេដៃអ្នកទិញ <span style="padding-left: 250px"></span></strong></p>
                            </td>
                            <td>
                                <p><strong>សាក្សីទី១ <span style="padding-left: 250px"></span></strong></p>
                            </td>
                            <td>
                                <p><strong>សាក្សីទី២ <span style="padding-left: 250px"></span></strong></p>
                            </td>
                            <td>
                                <p><strong>ស្នាមមេដៃអ្នកលក់/ម្ចាស់ដី <span style="padding-left: 250px"></span></strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px">
                                <p>ឈ្មោះ.................</p>
                            </td>
                            <td style="padding-top: 10px">
                                <p>ឈ្មោះ.................</p>
                            </td>
                            <td style="padding-top: 10px">
                                <p>ឈ្មោះ.................</p>
                            </td>
                            <td style="padding-top: 10px">
                                <p>ឈ្មោះ.................</p>
                            </td>
                        </tr>
                        <tr>
                            <td>ទូរស័ព្ទលេខ៖.................................</td>
                            <td colspan="2"></td>
                            <td>ទូរស័ព្ទលេខ៖.................................</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div  style="float: right">
        <button type="button" onclick="printDiv()" class="btn btn-default glyphicon glyphicon-print"></button>
        <!--        <button type="button" onclick="closeWin()" class="btn btn-default" data-dismiss="modal">Close</button>-->
    </div>



