document.write('<div align="center">背景顏色<select name=bcolor id=bcolor onchange="javascript:document.bgColor=this.options[this.selectedIndex].value;">			  <option style="background-color: #f0f0f0" value="#f0f0f0">默認</option>			  <option style="background-color: #ffffff" value="#ffffff">白色</option>              <option style="background-color: #e4ebf1" value="#e4ebf1">淡藍</option>			  <option style="background-color: #e6f3ff" value="#e6f3ff">藍色</option>               <option style="background-color: #eeeeee" value="#eeeeee">淡灰</option>              <option style="background-color: #eaeaea" value="#eaeaea">灰色</option>                <option style="background-color: #e4e1d8" value="#e4e1d8">深灰</option>              <option style="background-color: #e6e6e6" value="#e6e6e6">暗灰</option>              <option style="background-color: #eefaee" value="#eefaee">綠色</option>              <option style="background-color: #ffffed" value="#ffffed">明黃</option>              </select>			  字體顏色<select name=txtcolor id=txtcolor onchange="javascript:chaptercontent.style.color=this.options[this.selectedIndex].value;"> 			  <option value="#000000">黑色</option>              <option value="#ff0000">紅色</option>              <option value="#006600">綠色</option>              <option value="#0000ff">藍色</option>              <option value="#660000">棕色</option>			  </select>              字體大小<select name=fonttype id=fonttype onchange="javascript:chaptercontent.style.cssText=this.options[this.selectedIndex].value+\';line-height: 150%\';chaptercontent.style.color=txtcolor.options[txtcolor.selectedIndex].value;"> 			  <option value={font-size:12px;} >小號</option> 			  <option value={font-size:14px;} >較小</option> 			  <option value={font-size:16px;} >中號</option>			  <option value={font-size:18px;} >較大</option>			  <option value={font-size:24px;} >大號</option>			  </select>            滑鼠雙擊滾屏<input name=scrollspeed id=scrollspeed onchange="javascript:setSpeed();" size=2 value=5>            (1-10，1最慢，10最快）             <input name=saveset id=saveset onclick="javascript:saveSet();" type=button value=保存設置><br /><br /></div>');
