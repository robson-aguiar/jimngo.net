var _$_e84b=["getDay","getHours","opening_monday","opening_tomorrow","opening_soon","text","call","email","img","getElementsByTagName","length","data-src","getAttribute","src","setAttribute","calc-ss","home-valuation-ss","service-ss","dpa-ss","refinance-ss","sfr-ss","flyer-ss","slide","getElementsByClassName","getElementById","index","className","slide showing","mortgage-income-widget","widget-slide","tabcontent","message","dti_messages","display","style","none","height","0px","block","scrollHeight","px","click","active","contains","classList","remove","toggle","nextElementSibling","addEventListener","value","innerHTML","toLocaleString","scrollIntoView","mySelect","FHA","min","dp","DP%","3.5","VA","USDA","0.0","Conventional","3.0","Jumbo","10.0","pp","max","mySelect2","PP","loanMaxNote","jumboLoan","sales-price","LTV","mi","MI%","apr","APR%","pt","PT%","efr","ebr","EFR%","EBR%","auto_loan","Please enter only positive number","","student_loan","installment_loan","revolving_account","other_debt","ML","calc-results","DP","LA","pow","PI","T","I","HOI","MP","TMI","flyers","collapsible","content","onclick","HomeSearchBtnWidget","SearchTextWidget","#home-search-form #SearchValidationError","querySelector","preventDefault","event","slide-1"];function current_date_time(){var _0x26D6F= new Date,_0x26D9F=_0x26D6F[_$_e84b[0]](),_0x26DCF=_0x26D6F[_$_e84b[1]]();6== _0x26D9F&& _0x26DCF>= 18?open_monday():0== _0x26D9F?open_tomorrow():_0x26DCF< 10?open_soon():_0x26DCF>= 18?open_tomorrow():show_phone()}function open_monday(){show(_$_e84b[2]),hide(_$_e84b[3]),hide(_$_e84b[4]),hide_phone()}function open_tomorrow(){hide(_$_e84b[2]),show(_$_e84b[3]),hide(_$_e84b[4]),hide_phone()}function open_soon(){hide(_$_e84b[2]),hide(_$_e84b[3]),show(_$_e84b[4]),hide_phone()}function open(){hide(_$_e84b[2]),hide(_$_e84b[3]),hide(_$_e84b[4]),show_phone()}function hide_phone(){show(_$_e84b[5]),hide(_$_e84b[6]),show(_$_e84b[7])}function show_phone(){show(_$_e84b[5]),show(_$_e84b[6]),show(_$_e84b[7])}function init(){for(var _0x26E2F=document[_$_e84b[9]](_$_e84b[8]),_0x26C7F=0;_0x26C7F< _0x26E2F[_$_e84b[10]];_0x26C7F++){if(_0x26E2F[_0x26C7F][_$_e84b[12]](_$_e84b[11])){_0x26E2F[_0x26C7F][_$_e84b[14]](_$_e84b[13],_0x26E2F[_0x26C7F][_$_e84b[12]](_$_e84b[11]));var _0x26E5F=_0x26E2F[_0x26C7F][_$_e84b[12]](_$_e84b[11])}}}function slideshow(){setInterval((function(){nextSlide(_$_e84b[15]),nextSlide(_$_e84b[16]),nextSlide(_$_e84b[17]),nextSlide(_$_e84b[18]),nextSlide(_$_e84b[19]),nextSlide(_$_e84b[20]),nextSlide(_$_e84b[21])}),2e3)}function nextSlide(_0x26DFF){var _0x26E8F=document[_$_e84b[24]](_0x26DFF)[_$_e84b[23]](_$_e84b[22]);_0x26E8F[_$_e84b[25]]= _0x26E8F[_$_e84b[25]]|| 0,_0x26E8F[_0x26E8F[_$_e84b[25]]][_$_e84b[26]]= _$_e84b[22],_0x26E8F[_$_e84b[25]]= (_0x26E8F[_$_e84b[25]]+ 1)% _0x26E8F[_$_e84b[10]],_0x26E8F[_0x26E8F[_$_e84b[25]]][_$_e84b[26]]= _$_e84b[27]}setInterval(current_date_time,1e3),init(),onload= slideshow;const calculator=_$_e84b[28],widget_slides=document[_$_e84b[24]](calculator)[_$_e84b[23]](_$_e84b[29]),tabcontents=document[_$_e84b[24]](calculator)[_$_e84b[23]](_$_e84b[30]),messages=document[_$_e84b[24]](_$_e84b[32])[_$_e84b[23]](_$_e84b[31]);function show_dti_message(_0x26DFF){slide_up(messages),slide_down(_0x26DFF)}function show_tab_content(_0x26DFF){slide_up(tabcontents),slide_down(_0x26DFF)}function slide_up(_0x26BBF){for(var _0x26C7F=0;_0x26C7F< _0x26BBF[_$_e84b[10]];_0x26C7F++){_0x26BBF[_0x26C7F][_$_e84b[34]][_$_e84b[33]]= _$_e84b[35],_0x26BBF[_0x26C7F][_$_e84b[34]][_$_e84b[36]]= _$_e84b[37]}}function slide_down(_0x26DFF){var _0x26CDF=document[_$_e84b[24]](_0x26DFF);_0x26CDF[_$_e84b[34]][_$_e84b[33]]= _$_e84b[38],_0x26CDF[_$_e84b[34]][_$_e84b[36]]= _0x26CDF[_$_e84b[39]]+ _$_e84b[40]}function collapsible(_0x26CAF,_0x26BEF,_0x26C1F){const _0x26BBF=document[_$_e84b[24]](_0x26CAF)[_$_e84b[23]](_0x26BEF),_0x26C4F=document[_$_e84b[24]](_0x26CAF)[_$_e84b[23]](_0x26C1F);for(let _0x26C7F=0;_0x26C7F< _0x26BBF[_$_e84b[10]];_0x26C7F++){_0x26BBF[_0x26C7F][_$_e84b[48]](_$_e84b[41],(function(){for(let _0x26D0F=0;_0x26D0F< _0x26C4F[_$_e84b[10]];_0x26D0F++){_0x26C4F[_0x26D0F][_$_e84b[34]][_$_e84b[36]]= _$_e84b[37]};if(this[_$_e84b[44]][_$_e84b[43]](_$_e84b[42])){this[_$_e84b[44]][_$_e84b[45]](_$_e84b[42])}else {for(let _0x26D3F=0;_0x26D3F< _0x26BBF[_$_e84b[10]];_0x26D3F++){_0x26BBF[_0x26D3F][_$_e84b[44]][_$_e84b[45]](_$_e84b[42])};this[_$_e84b[44]][_$_e84b[46]](_$_e84b[42]);var _0x26CDF=this[_$_e84b[47]];_0x26CDF[_$_e84b[34]][_$_e84b[36]]= _0x26CDF[_$_e84b[39]]+ _$_e84b[40]}}))}}function get_id_value(_0x26DFF){return document[_$_e84b[24]](_0x26DFF)[_$_e84b[49]]}function set_id_value(_0x26DFF,_0x26EBF){document[_$_e84b[24]](_0x26DFF)[_$_e84b[49]]= _0x26EBF}function toString(_0x26DFF,_0x26EBF,_0x26EEF){document[_$_e84b[24]](_0x26DFF)[_$_e84b[50]]= _0x26EBF[_$_e84b[51]](void(0),{minimumFractionDigits:_0x26EEF,maximumFractionDigits:_0x26EEF})}function show(_0x26DFF){document[_$_e84b[24]](_0x26DFF)[_$_e84b[34]][_$_e84b[33]]= _$_e84b[38]}function hide(_0x26DFF){document[_$_e84b[24]](_0x26DFF)[_$_e84b[34]][_$_e84b[33]]= _$_e84b[35]}function updateScrollHeight(_0x26DFF){var _0x26CDF=document[_$_e84b[24]](_0x26DFF);_0x26CDF[_$_e84b[34]][_$_e84b[36]]= _0x26CDF[_$_e84b[39]]+ _$_e84b[40]}function show_slide(_0x26DFF){slide_up(widget_slides),slide_down(_0x26DFF),document[_$_e84b[24]](calculator)[_$_e84b[52]](),initialize()}function initialize(){get_loan_program(),get_loan_term(),get_sales_price(),get_down_payment_percent(),get_mi_rate(),get_interest_rate(),get_property_tax_rate(),get_lenders_required_dti()}function get_loan_program(){loan_program= document[_$_e84b[24]](_$_e84b[53])[_$_e84b[49]],show_tab_content(loan_program),_$_e84b[54]=== loan_program?(document[_$_e84b[24]](_$_e84b[56])[_$_e84b[55]]= 3.5,document[_$_e84b[24]](_$_e84b[57])[_$_e84b[50]]= _$_e84b[58]):_$_e84b[59]=== loan_program|| _$_e84b[60]=== loan_program?(document[_$_e84b[24]](_$_e84b[56])[_$_e84b[55]]= 0,document[_$_e84b[24]](_$_e84b[57])[_$_e84b[50]]= _$_e84b[61]):_$_e84b[62]=== loan_program?(document[_$_e84b[24]](_$_e84b[56])[_$_e84b[55]]= 3,document[_$_e84b[24]](_$_e84b[57])[_$_e84b[50]]= _$_e84b[63]):_$_e84b[64]=== loan_program&& (document[_$_e84b[24]](_$_e84b[56])[_$_e84b[55]]= 10,document[_$_e84b[24]](_$_e84b[57])[_$_e84b[50]]= _$_e84b[65]),_$_e84b[64]=== loan_program?(document[_$_e84b[24]](_$_e84b[66])[_$_e84b[55]]= 5e5,document[_$_e84b[24]](_$_e84b[66])[_$_e84b[67]]= 2e6):(document[_$_e84b[24]](_$_e84b[66])[_$_e84b[55]]= 1e5,document[_$_e84b[24]](_$_e84b[66])[_$_e84b[67]]= 1e6)}function get_loan_term(){loan_term= get_id_value(_$_e84b[68])}function get_sales_price(){purchase_price= Number(get_id_value(_$_e84b[66])),toString(_$_e84b[69],purchase_price,0),_$_e84b[64]!== loan_program&& purchase_price> 417e3?show(_$_e84b[70]):hide(_$_e84b[70]),_$_e84b[64]=== loan_program&& purchase_price< 484350?show(_$_e84b[71]):hide(_$_e84b[71]),updateScrollHeight(_$_e84b[72])}function get_down_payment_percent(){down_payment_percent= Number(get_id_value(_$_e84b[56])),loan_to_value= 100- down_payment_percent,toString(_$_e84b[57],down_payment_percent,1),toString(_$_e84b[73],loan_to_value,1)}function get_mi_rate(){_$_e84b[54]=== loan_program&& down_payment_percent< 5?mi_rate= 0.85:_$_e84b[54]=== loan_program&& down_payment_percent>= 5?mi_rate= 0.8:_$_e84b[59]=== loan_program?mi_rate= 0:_$_e84b[60]=== loan_program?mi_rate= 0.35:_$_e84b[62]=== loan_program&& down_payment_percent>= 20?mi_rate= 0:_$_e84b[64]=== loan_program&& down_payment_percent>= 20?mi_rate= 0:mi_rate= Number(get_id_value(_$_e84b[74])),toString(_$_e84b[75],mi_rate,2)}function get_interest_rate(){interest_rate= Number(get_id_value(_$_e84b[76])),toString(_$_e84b[77],interest_rate,3)}function get_property_tax_rate(){property_tax_rate= Number(get_id_value(_$_e84b[78])),toString(_$_e84b[79],property_tax_rate,2)}function get_lenders_required_dti(){qualifying_front_ratio= Number(get_id_value(_$_e84b[80])),qualifying_back_ratio= Number(get_id_value(_$_e84b[81])),toString(_$_e84b[82],qualifying_front_ratio,0),qualifying_front_ratio> qualifying_back_ratio&& (document[_$_e84b[24]](_$_e84b[81])[_$_e84b[49]]= qualifying_front_ratio,qualifying_back_ratio= Number(get_id_value(_$_e84b[81]))),toString(_$_e84b[83],qualifying_back_ratio,0)}function get_liability(){return auto_loan= Number(get_id_value(_$_e84b[84])),auto_loan< 0?(alert(_$_e84b[85]),auto_loan= 0,void(set_id_value(_$_e84b[84],_$_e84b[86]))):(student_loan= Number(get_id_value(_$_e84b[87])),student_loan< 0?(alert(_$_e84b[85]),student_loan= 0,void(set_id_value(_$_e84b[87],_$_e84b[86]))):(installment_loan= Number(get_id_value(_$_e84b[88])),installment_loan< 0?(alert(_$_e84b[85]),installment_loan= 0,void(set_id_value(_$_e84b[88],_$_e84b[86]))):(revolving_account= Number(get_id_value(_$_e84b[89])),revolving_account< 0?(alert(_$_e84b[85]),revolving_account= 0,void(set_id_value(_$_e84b[89],_$_e84b[86]))):(other_debt= Number(get_id_value(_$_e84b[90])),other_debt< 0?(alert(_$_e84b[85]),other_debt= 0,void(set_id_value(_$_e84b[90],_$_e84b[86]))):(total_monthly_liability= auto_loan+ student_loan+ installment_loan+ revolving_account+ other_debt,toString(_$_e84b[91],total_monthly_liability,0),calc(),void(show_slide(_$_e84b[92])))))))}function calc(){var _0x26AFF=12* loan_term,_0x26B5F=interest_rate/ 1200,_0x26A6F=purchase_price* (down_payment_percent/ 100);toString(_$_e84b[93],_0x26A6F,0),loan_amount= purchase_price- _0x26A6F,toString(_$_e84b[94],loan_amount,0),_$_e84b[64]!== loan_program&& loan_amount> 417e3?show(_$_e84b[70]):hide(_$_e84b[70]),_$_e84b[64]=== loan_program&& loan_amount< 484350?show(_$_e84b[71]):hide(_$_e84b[71]);var _0x26B2F=loan_amount* _0x26B5F/ (1- Math[_$_e84b[95]](1/ (1+ _0x26B5F),_0x26AFF));toString(_$_e84b[96],_0x26B2F,2);var _0x26B8F=property_tax_rate* purchase_price/ 1200;toString(_$_e84b[97],_0x26B8F,2);var _0x26ACF=mi_rate* loan_amount/ 1200;toString(_$_e84b[98],_0x26ACF,2);var _0x26A9F=loan_amount* (0.25/ 1200);toString(_$_e84b[99],_0x26A9F,2),housing_expense= _0x26B2F+ _0x26B8F+ _0x26ACF+ _0x26A9F,toString(_$_e84b[100],housing_expense,2);var _0x269DF=qualifying_front_ratio/ 100,_0x26A0F=qualifying_back_ratio/ 100,_0x26A3F;total_monthly_liability> housing_expense* ((_0x26A0F- _0x269DF)/ _0x269DF)?required_monthly_income= (housing_expense+ total_monthly_liability)/ _0x26A0F:required_monthly_income= housing_expense/ _0x269DF,toString(_$_e84b[101],required_monthly_income,2)}collapsible(_$_e84b[102],_$_e84b[103],_$_e84b[104]),document[_$_e84b[24]](_$_e84b[106])[_$_e84b[105]]= function(_0x2697F){var _0x269AF=document[_$_e84b[24]](_$_e84b[107])[_$_e84b[49]];_$_e84b[86]=== _0x269AF|| void(0)=== _0x269AF?(document[_$_e84b[109]](_$_e84b[108])[_$_e84b[34]][_$_e84b[33]]= _$_e84b[38],window[_$_e84b[111]][_$_e84b[110]]()):document[_$_e84b[109]](_$_e84b[108])[_$_e84b[34]][_$_e84b[33]]= _$_e84b[35]},initialize(),slide_up(widget_slides),slide_down(_$_e84b[112])