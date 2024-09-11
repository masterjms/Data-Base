<h1>신규 회원 입력</h1>
<table bgcolor="black" cellpadding="5" cellspacing="1">

	<tr bgcolor="white" align="center">
		<td>이름 : </td>
		<td><input type = "text" name = "username"></td>
	</tr> 
	<tr bgcolor="white" align="center">
		<td>출생 : </td>
		<td><input type = "text" name = "birthyear"></td>
	</tr>
	<tr bgcolor="white" align="center">
		<td>성별 : </td>
		<td>
		<input type = "radio" name = "gender">남성
		<input type = "radio" name = "gender">여성 
		</td>
	</tr>
	<tr bgcolor="white" align="center">
		<td>주소 : </td>
		<td><select name = "addr">
		<option value="서울">서울</option>
		<option value="경기">경기</option>
		<option value="전남">전남</option>
		<option value="전북">전북</option>
		<option value="충남">충남</option>
		<option value="충북">충북</option>
		<option value="강원">강원</option>
		<option value="경남">경남</option>
		<option value="경북">경북</option>
		<option value="제주">제주</option>
		</td>
	</tr>
	<tr bgcolor="white" align="center">
		<td>전화번호 : </td>
		<td><input type = "text" name = "mobile"></td>
	</tr>
</table>
<br>
<input type="submit" value="저장">