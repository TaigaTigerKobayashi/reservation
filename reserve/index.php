<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
02
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
03
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
04
<b>予約フォーム</b><br>
05
<form method="POST" action="">
06
1.カレンダーから日付を選択してください<br>
07
<input type="text" id="date_val"/><br>
08
<div id="datepicker"></div><br>
09
2.時間を選択してください<br>
10
    <select name="time">
11
    <option value=""> 選択してください</option>
12
    <option value="">9:00～10:00</option>
13
    <option value="">10:00～11:00</option>
14
    <option value="">11:00～12:00</option>
15
    <option value="">13:00～14:00</option>
16
    <option value="">14:00～15:00</option>
17
    <option value="">15:00～16:00</option>
18
    <option value="">16:00～17:00</option>
19
    <option value="">17:00～18:00</option>
20
    </select><br><br>
21
3.ご希望される弁護士を選択してください<br>
22
    <select name="lawyer">
23
    <option value=""> 選択してください</option>
24
    <option value="">松島</option>
25
    <option value="">小野</option>
26
    <option value="">草野</option>
27
    </select>
28
    <br><br>
29
    <input type="submit" value="予約する" class="submit">
30
</form>
31
 
32
<script>
33
$(function() {
34
    var dateFormat = 'yy年mm月dd日';
35
    $("#datepicker").datepicker({
36
        dateFormat: dateFormat,
37
        minDate: 0,
38
        onSelect: function(dateText, inst) {
39
                    $("#date_val").val(dateText);
40
        }
41
    });
42
});
43
</script>
