<style type="text/css">
.box {
  width: 20%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  background-color:#CF3;
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  /*text-align: center;*/
}
</style>

<div class = "box">
<form id = "form1" style="border:#0F0">
	<pre>
Name:        <input type="text" id="name" />
    <br />
UserName:    <input type="text" id="uid" />
    <br />
Password:    <input type="password" id="pwd" />
    <br />
RePassword:  <input type="password" id="rpwd"/>
    <br />
Email ID:    <input type="text" id="email"/>
    <br />
Security Que:        <select name="sq">
					<option selected hidden="true">Choose</option>
					<option value="fav color">Fav color</option>
					<option value="fav animal">Fav animal</option>
                    <option value="fav place">Fav place </option>
                    </select>
    <br />
Answer:	     <input type="text" id="ans" />
    
    		<input type = "button" name="submit" value="Register"/> <input type = "button"  value="Not Now"/>
            </pre>
            </form>
            
