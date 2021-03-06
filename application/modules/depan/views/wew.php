<?php
    $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetPrintHeader(false);
    $pdf->SetPrintFooter(false);
    $pdf->SetTitle('Templates Setoran Pajak');
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Erwan Widayat');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
    $pdf->SetTopMargin(5);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetDisplayMode('real', 'default');
    // Page 1
    $pdf->AddPage();
    // create some HTML content
    $html = '<h1>HTML Example</h1>
    Some special characters: &lt; € &euro; &#8364; &amp; è &egrave; &copy; &gt; \\slash \\\\double-slash \\\\\\triple-slash
    <h2>List</h2>
    List example:
    <ol>
        <li><img src="images/logo_example.png" alt="test alt attribute" width="30" height="30" border="0" /> test image</li>
        <li><b>bold text</b></li>
        <li><i>italic text</i></li>
        <li><u>underlined text</u></li>
        <li><b>b<i>bi<u>biu</u>bi</i>b</b></li>
        <li><a href="http://www.tecnick.com" dir="ltr">link to http://www.tecnick.com</a></li>
        <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br />Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
        <li>SUBLIST
            <ol>
                <li>row one
                    <ul>
                        <li>sublist</li>
                    </ul>
                </li>
                <li>row two</li>
            </ol>
        </li>
        <li><b>T</b>E<i>S</i><u>T</u> <del>line through</del></li>
        <li><font size="+3">font + 3</font></li>
        <li><small>small text</small> normal <small>small text</small> normal <sub>subscript</sub> normal <sup>superscript</sup> normal</li>
    </ol>
    <dl>
        <dt>Coffee</dt>
        <dd>Black hot drink</dd>
        <dt>Milk</dt>
        <dd>White cold drink</dd>
    </dl>
    <div style="text-align:center">IMAGES<br />

    </div>';

    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');


    // output some RTL HTML content
    $html = '<div style="text-align:center">The words &#8220;<span dir="rtl">&#1502;&#1494;&#1500; [mazel] &#1496;&#1493;&#1489; [tov]</span>&#8221; mean &#8220;Congratulations!&#8221;</div>';
    $pdf->writeHTML($html, true, false, true, false, '');

    // test some inline CSS
    $html = '<p>This is just an example of html code to demonstrate some supported CSS inline styles.
    <span style="font-weight: bold;">bold text</span>
    <span style="text-decoration: line-through;">line-trough</span>
    <span style="text-decoration: underline line-through;">underline and line-trough</span>
    <span style="color: rgb(0, 128, 64);">color</span>
    <span style="background-color: rgb(255, 0, 0); color: rgb(255, 255, 255);">background color</span>
    <span style="font-weight: bold;">bold</span>
    <span style="font-size: xx-small;">xx-small</span>
    <span style="font-size: x-small;">x-small</span>
    <span style="font-size: small;">small</span>
    <span style="font-size: medium;">medium</span>
    <span style="font-size: large;">large</span>
    <span style="font-size: x-large;">x-large</span>
    <span style="font-size: xx-large;">xx-large</span>
    </p>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // reset pointer to the last page
    $pdf->lastPage();

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // Print a table

    // add a page
    $pdf->AddPage();

    // create some HTML content
    $subtable = '<table border="1" cellspacing="6" cellpadding="4"><tr><td>a</td><td>b</td></tr><tr><td>c</td><td>d</td></tr></table>';

    $html = '<h2>HTML TABLE:</h2>
    <table border="1" cellspacing="3" cellpadding="4">
        <tr>
            <th>#</th>
            <th align="right">RIGHT align</th>
            <th align="left">LEFT align</th>
            <th>4A</th>
        </tr>
        <tr>
            <td>1</td>
            <td bgcolor="#cccccc" align="center" colspan="2">A1 ex<i>amp</i>le <a href="http://www.tcpdf.org">link</a> column span. One two tree four five six seven eight nine ten.<br />line after br<br /><small>small text</small> normal <sub>subscript</sub> normal <sup>superscript</sup> normal  bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla<ol><li>first<ol><li>sublist</li><li>sublist</li></ol></li><li>second</li></ol><small color="#FF0000" bgcolor="#FFFF00">small small small small small small small small small small small small small small small small small small small small</small></td>
            <td>4B</td>
        </tr>
        <tr>
            <td>'.$subtable.'</td>
            <td bgcolor="#0000FF" color="yellow" align="center">A2 € &euro; &#8364; &amp; è &egrave;<br/>A2 € &euro; &#8364; &amp; è &egrave;</td>
            <td bgcolor="#FFFF00" align="left"><font color="#FF0000">Red</font> Yellow BG</td>
            <td>4C</td>
        </tr>
        <tr>
            <td>1A</td>
            <td rowspan="2" colspan="2" bgcolor="#FFFFCC">2AA<br />2AB<br />2AC</td>
            <td bgcolor="#FF0000">4D</td>
        </tr>
        <tr>
            <td>1B</td>
            <td>4E</td>
        </tr>
        <tr>
            <td>1C</td>
            <td>2C</td>
            <td>3C</td>
            <td>4F</td>
        </tr>
    </table>';

    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    // Print some HTML Cells

    $html = '<span color="red">red</span> <span color="green">green</span> <span color="blue">blue</span><br /><span color="red">red</span> <span color="green">green</span> <span color="blue">blue</span>';

    $pdf->SetFillColor(255,255,0);

    $pdf->writeHTMLCell(0, 0, '', '', $html, 'LRTB', 1, 0, true, 'L', true);
    $pdf->writeHTMLCell(0, 0, '', '', $html, 'LRTB', 1, 1, true, 'C', true);
    $pdf->writeHTMLCell(0, 0, '', '', $html, 'LRTB', 1, 0, true, 'R', true);

    // reset pointer to the last page
    $pdf->lastPage();

    // Render Output
    ob_clean();

    $pdf->Output(APPPATH.'..\setoran\Setoran Pajak.pdf', 'FI');
?>