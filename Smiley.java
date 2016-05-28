import java.awt.*;
import java.applet.*;
/*<applet code = "Smiley" height = 150 width = 200>
</applet>
*/
public class Smiley extends Applet
{
	public void paint(Graphics g)
	{
		g.drawOval(30,30,100,100);
		g.drawOval(50,50,25,25);
		g.drawOval(85,50,25,25);
		g.drawArc(50,60,60,60,0,-180);
	}
}