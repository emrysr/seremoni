<?php
$data = <<<WORD
<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<?mso-application progid="Word.Document"?>
<w:wordDocument
   xmlns:w="http://schemas.microsoft.com/office/word/2003/wordml"
   xmlns:wx="http://schemas.microsoft.com/office/word/2003/auxHint"
   xmlns:o="urn:schemas-microsoft-com:office:office"
   w:macrosPresent="no"
   w:embeddedObjPresent="no"
   w:ocxPresent="no"
   xml:space="preserve">
  <o:DocumentProperties>
    <o:Title>This is the title</o:Title>
    <o:Author>Darl McBride</o:Author>
    <o:LastAuthor>Bill Gates</o:LastAuthor>
    <o:Revision>1</o:Revision>
    <o:TotalTime>0</o:TotalTime>
    <o:Created>2007-03-15T23:05:00Z</o:Created>
    <o:LastSaved>2007-03-15T23:05:00Z</o:LastSaved>
    <o:Pages>1</o:Pages>
    <o:Words>6</o:Words>
    <o:Characters>40</o:Characters>
    <o:Company>SCO Group, Inc.</o:Company>
    <o:Lines>1</o:Lines>
    <o:Paragraphs>1</o:Paragraphs>
    <o:CharactersWithSpaces>45</o:CharactersWithSpaces>
    <o:Version>11.6359</o:Version>
  </o:DocumentProperties>
  <w:fonts>
    <w:defaultFonts
       w:ascii="Times New Roman"
       w:fareast="Times New Roman"
       w:h-ansi="Times New Roman"
       w:cs="Times New Roman" />
  </w:fonts>
  <w:styles>
    <w:versionOfBuiltInStylenames w:val="4" />
    <w:latentStyles w:defLockedState="off" w:latentStyleCount="156" />
    <w:style w:type="paragraph" w:default="on" w:styleId="Normal">
      <w:name w:val="Normal" />
      <w:rPr>
        <wx:font wx:val="Times New Roman" />
        <w:sz w:val="24" />
        <w:sz-cs w:val="24" />
        <w:lang w:val="EN-US" w:fareast="EN-US" w:bidi="AR-SA" />
      </w:rPr>
    </w:style>
    <w:style w:type="paragraph" w:styleId="Heading1">
      <w:name w:val="heading 1" />
      <wx:uiName wx:val="Heading 1" />
      <w:basedOn w:val="Normal" />
      <w:next w:val="Normal" />
      <w:rsid w:val="00D93B94" />
      <w:pPr>
        <w:pStyle w:val="Heading1" />
        <w:keepNext />
        <w:spacing w:before="240" w:after="60" />
        <w:outlineLvl w:val="0" />
      </w:pPr>
      <w:rPr>
        <w:rFonts w:ascii="Arial" w:h-ansi="Arial" w:cs="Arial" />
        <wx:font wx:val="Arial" />
        <w:b />
        <w:b-cs />
        <w:kern w:val="32" />
        <w:sz w:val="32" />
        <w:sz-cs w:val="32" />
      </w:rPr>
    </w:style>
    <w:style w:type="character" w:default="on" w:styleId="DefaultParagraphFont">
      <w:name w:val="Default Paragraph Font" />
      <w:semiHidden />
    </w:style>
    <w:style w:type="table" w:default="on" w:styleId="TableNormal">
      <w:name w:val="Normal Table" />
      <wx:uiName wx:val="Table Normal" />
      <w:semiHidden />
      <w:rPr>
        <wx:font wx:val="Times New Roman" />
      </w:rPr>
      <w:tblPr>
        <w:tblInd w:w="0" w:type="dxa" />
        <w:tblCellMar>
          <w:top w:w="0" w:type="dxa" />
          <w:left w:w="108" w:type="dxa" />
          <w:bottom w:w="0" w:type="dxa" />
          <w:right w:w="108" w:type="dxa" />
        </w:tblCellMar>
      </w:tblPr>
    </w:style>
    <w:style w:type="list" w:default="on" w:styleId="NoList">
      <w:name w:val="No List" />
      <w:semiHidden />
    </w:style>
  </w:styles>
  <w:docPr>
    <w:view w:val="print" />
    <w:zoom w:percent="100" />
    <w:doNotEmbedSystemFonts />
    <w:proofState w:spelling="clean" w:grammar="clean" />
    <w:attachedTemplate w:val="" />
    <w:defaultTabStop w:val="720" />
    <w:punctuationKerning />
    <w:characterSpacingControl w:val="DontCompress" />
    <w:optimizeForBrowser />
    <w:validateAgainstSchema />
    <w:saveInvalidXML w:val="off" />
    <w:ignoreMixedContent w:val="off" />
    <w:alwaysShowPlaceholderText w:val="off" />
    <w:compat>
      <w:breakWrappedTables />
      <w:snapToGridInCell />
      <w:wrapTextWithPunct />
      <w:useAsianBreakRules />
      <w:dontGrowAutofit />
    </w:compat>
  </w:docPr>
  <w:body>
    <wx:sect>
      <w:p>
        <w:r>
          <w:t>This is the first paragraph</w:t>
        </w:r>
      </w:p>
      <wx:sub-section>
        <w:p>
          <w:pPr>
            <w:pStyle w:val="Heading1" />
          </w:pPr>
          <w:r>
            <w:t>This is a heading</w:t>
          </w:r>
        </w:p>
        <w:sectPr>
          <w:pgSz w:w="12240" w:h="15840" />
          <w:pgMar w:top="1440"
                   w:right="1800"
                   w:bottom="1440"
                   w:left="1800"
                   w:header="720"
                   w:footer="720"
                   w:gutter="0" />
          <w:cols w:space="720" />
          <w:docGrid w:line-pitch="360" />
        </w:sectPr>
      </wx:sub-section>
    </wx:sect>
  </w:body>
</w:wordDocument>
WORD;

$path = '../../readingsOnline/';
$file = 'test.docx';
echo file_put_contents($path.$file, $data) .' bytes written [file_put_contents()].<br>';
echo phpversion().' [phpversion()]';

?>
