<?php
echo '<form name="form1" method="post" action="'.$this->_tpl_vars['next_page'].'">
<div class="block-head">'.$this->_tpl_vars['step_menu5'].'</div>
<!-- ������վ��·�� -->
<div class="block-title">'.$this->_tpl_vars['step_title0'].'</div>
<div class="block-summary">'.$this->_tpl_vars['step_summary0'].'</div>
<div class="block-content">
	<table cellpadding="0" cellspacing="1">
		<tr><td>��վ��·��</td></tr>
		<tr><td><input name="local_root" type="text" class="input" onfocus="this.select();" value="'.$this->_tpl_vars['local_root'].'" size="50"/></td>
		</tr>
	</table>
</div>
<!-- ����Mysql���Ӳ��� -->
<div class="block-title">'.$this->_tpl_vars['step_title1'].'</div>
<div class="block-summary">'.$this->_tpl_vars['step_summary1'].'</div>
<div class="block-content">
	<table cellpadding="0" cellspacing="1">
		<tr><td>������ַ</td></tr>
		<tr><td><input name="mysql_host" type="text" class="input" onfocus="this.select();" value="localhost" size="30" style="width:150px" /></td></tr>
		<tr><td>���ӱ���</td></tr>
		<tr><td><select class=\'select\'  size=\'1\' name=\'mysql_charset\'>
<option value=\'gbk\' selected=\'selected\'>gbk</option>
<option value=\'gb2312\'>gb2312</option>
<option value=\'utf8\'>utf8</option>
<option value=\'big5\'>big5</option>
<option value=\'latin1\'>latin1</option>
<option value=\'default\'>default</option>
</select></td></tr>
		<tr><td>���ݿ�����</td></tr>
		<tr><td>
			<input name="mysql_name" type="text" class="input" size="30" style="width:150px" /> 
			<input type="checkbox" name="setup_table" value="yes" onclick="doAlert();" /> �������ݿ�
		</td></tr>
		<tr><td>�û���</td></tr>
		<tr><td><input name="mysql_user" type="text" class="input" size="30" style="width:150px" /></td></tr>
		<tr><td>��&nbsp;&nbsp;��</td></tr>
		<tr><td><input name="mysql_pass" type="password" class="input" size="30" style="width:150px" /></td></tr>
	</table>
</div>
<!-- ���ù���Ա�û� -->
<div class="block-title">'.$this->_tpl_vars['step_title2'].'</div>
<div class="block-summary">'.$this->_tpl_vars['step_summary2'].'</div>
<div class="block-content">
	<table cellpadding="0" cellspacing="1">
		<tr><td>����Ա�˺�</td></tr>
		<tr><td><input name="system_user" type="text" class="input" size="30" style="width:150px" /></td></tr>
		<tr><td>����Ա����</td></tr>
		<tr><td><input name="system_pass" type="password" class="input" size="30" style="width:150px" /></td></tr>
		<tr><td>ȷ�Ϲ���Ա����</td></tr>
		<tr><td><input name="system_pass_confirm" type="password" class="input" size="30" style="width:150px" /></td></tr>
		<tr><td>����ԱEmail</td></tr>
		<tr><td><input name="system_email" type="text" class="input" size="30" style="width:150px" /></td></tr>
	</table>
</div>
<div class="block-menu">
	<input type="button" name="bt0" value="���ذ�װ��ҳ" class="button" onclick="window.location=\'./index.php\';"><span class="span-space"></span>
	<input type="submit" name="bt1" value="��һ��" class="button" onClick="return checkPass();" />
</div>
</form>
<script language="javascript" src="js/alert.js"></script>';
?>