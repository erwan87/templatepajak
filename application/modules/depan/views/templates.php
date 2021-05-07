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
    $html = '<h2>HTML TABLE:</h2>
    <table border="1" cellspacing="0" cellpadding="4">
        <tr>
            <th rowspan="4">#</th>
            <th align="center">SURAT SETORAN PAJAK</th>
            <th>4A</th>
        </tr>
        <tr>
            <th></th>            
            <th></th>            
            <th></th>
        </tr>
        <tr>
            <th rowspan="2" align="center"><b>(SSP)</b></th>            
            <th></th>            
            <th></th>
        </tr>
        <tr>
            <th>1</th>            
            <th></th>
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
    
    $pdf->writeHTML($html, true, false, true, false, '');
    
    // Render Output
    ob_clean();

    // $pdf->Output('C:\xampp\htdocs\gereja\warta\Warta GKS - '.tgl_indo(date('Y-m-d')).' .pdf', 'FI');
    $pdf->Output(APPPATH.'..\setoran\Setoran Pajak.pdf', 'FI');
?>