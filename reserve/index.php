<script>
jQuery(function($){
    $.datepicker.regional['ja'] = {
        closeText: '閉じる!',
        prevText: '<前',
        nextText: '次>',
        currentText: '今日',
        monthNames: ['1月','2月','3月','4月','5月','6月',
        '7月','8月','9月','10月','11月','12月'],
        monthNamesShort: ['1月','2月','3月','4月','5月','6月',
        '7月','8月','9月','10月','11月','12月'],
        dayNames: ['日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日'],
        dayNamesShort: ['日','月','火','水','木','金','土'],
        dayNamesMin: ['日','月','火','水','木','金','土'],
        weekHeader: '週',
        dateFormat: 'yy/mm/dd',
        firstDay: 0,
        isRTL: false,
        showMonthAfterYear: true,
        yearSuffix: '年'};
    $.datepicker.setDefaults($.datepicker.regional['ja']);
    onSelect: function(dateText, inst) {
                    $("#date_val").val(dateText);
                    if(today == dateText){
                    	for(var i = 0; i < timelist.length; i++){
                    		if(timelist[i] < time){
                    			document.getElementById(timelist[i]).style.display = "none";
                    		}
                    	}
                    	
                    } else{
                    	for(var i = 0; i < timelist.length; i++){
                    			document.getElementById(timelist[i]).style.display = "";
                    	}
                    }              
        }
});

</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<b>予約フォーム</b><br>
<form method="POST" action="">
1.お名前(必須)<br>
<input class="form1" type="text" name="username" placeholder="　お名前"/><br><br>
2.メールアドレス(必須)<br>
<input class="form1" type="text" name="username" placeholder="　〇〇@gmail.com"/><br><br>
3.カレンダーから日付を選択してください<br>
<input type="text" id="date_val"　placeholder="　2020年〇月〇日" >
<div id="datepicker"></div><br>
4.時間を選択してください<br>
	<select name="time" >
	<option value=""> 選択してください</option>
	<option value="">9:00～</option>
	<option value="">10:00～</option>
	<option value="">11:00～</option>
	<option value="">13:00～</option>
	<option value="">14:00～</option>
	<option value="">15:00～</option>
	<option value="">16:00～</option>
	<option value="">17:00～</option>
	</select>

	<select name="time">
	<option value="">30分</option>
	<option value=""　selected>60分</option>
	<option value="">90分</option>
	<option value="">120分</option>
	</select>

	<br><br>
5.ご希望されるチューターを選択してください<br>
	<select name="lawyer">
	<option value=""> 選択してください</option>
	<option value="">松島</option>
	<option value="">小野</option>
	<option value="">草野</option>
	</select>
	<br><br>
	<input type="submit" value="予約する" class="submit">
</form>
 

<script>
$(function() {
	var dateFormat = 'yy年mm月dd日';
    $("#datepicker").datepicker({
    	lang:'ja',
        dateFormat: dateFormat,
        minDate: 0,
        onSelect: function(dateText, inst) {
                    $("#date_val").val(dateText);
        }
        
    });
    $( "#datepicker" ).datepicker('option','beforeShowDay',function(date){
	    var ret = [(date.getDay() != 0)];
	    return ret;
	});
    

    var dt = new Date();
    var y = dt.getFullYear();
    var m = ("00" + (dt.getMonth()+1)).slice(-2);
    var d = ("00" + dt.getDate()).slice(-2);
    var today = y + "年"　+ m + "月" + d + "日";
    console.log(today);
});

</script>
