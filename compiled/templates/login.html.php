<?php
echo '<br /><br />
<form name="frmlogin" method="post" action="'.$this->_tpl_vars['url_login'].'">
 <table class="grid" width="250" align="center">
   <caption>用户登录</caption>
    <tr align="center">
      <td class="odd"><table width="100%" class="hide" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width="37%" align="right" valign="middle">用户名：</td>
          <td width="63%"><input type="text" class="text" size="20" maxlength="30" style="width:120px" name="username" onKeyPress="javascript: if (event.keyCode==32) return false;" ></td>
        </tr>
        <tr>
          <td align="right" valign="middle">密　码：</td>
          <td><input type="password" class="text" size="20" maxlength="30" style="width:120px" name="password"></td>
        </tr>
        ';
if($this->_tpl_vars['show_checkcode'] == 1){
echo '
        <tr>
          <td align="right" valign="middle">验证码：</td>
          <td><input type="text" class="text" size="8" maxlength="8" name="checkcode">&nbsp;<img src="'.$this->_tpl_vars['url_checkcode'].'" style="cursor:pointer;" onclick="this.src=\''.$this->_tpl_vars['url_checkcode'].'?rand=\'+Math.random();"></td>
        </tr>
        ';
}
echo '
		<tr>
          <td align="right" valign="middle">有效期：</td>
          <td><select name="usecookie" class="select">
              <option value="0">浏览器进程</option>
              <option value="86400">保存一天</option>
			  <option value="2592000">保存一月</option>
			  <option value="315360000">保存一年</option>
            </select>
          </td>
        </tr>
        <tr>
		  <td><input type="hidden" name="action" value="login"></td>
          <td><input type="submit" class="button" value="&nbsp;登&nbsp;&nbsp;录&nbsp;" name="submit"></td>
          </tr>
      </table></td>
    </tr>
	<tr align="center"> 
      <td class="foot"> <a href="'.$this->_tpl_vars['url_register'].'">新用户注册</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$this->_tpl_vars['url_getpass'].'">取回密码</a> 
      </td>
    </tr>
  </table>
</form><br /><br />';
?>