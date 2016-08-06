<?
	require_once 'PHPWord.php';
	
	$PHPWord = new PHPWord();
	$section = $PHPWord->createSection(
													array( 'marginLeft'=>800, 'marginRight'=>200, 'marginTop'=>-300, 'marginBottom'=>200)
	);
	//head
	$styleFont = array('bold'=>true,'name'=>'TH SarabunPSK','size'=>16);

	$section->addImage('images/msu-logo.png',array('align'=>'center'));
	$header = $section->createHeader();
	$header->addWatermark('images/logo2y.jpg', array('marginTop'=>65, 'marginLeft'=>610, 'width'=>110, 'height'=>120));
	$styleParagraph = array('align'=>'center', 'spaceAfter'=>50);
	$section->addText('ใบสมัครศึกษาต่อระดับปริญญาตรี หลักสูตรสาธารณสุขศาสตร์บัญฑิต  (เทียบเข้า)',$styleFont,$styleParagraph);
	$section->addText('ระบบนอกเวลาราชการ ประจำปีการศึกษา',$styleFont,$styleParagraph);
	$section->addText('ระบบนอกเวลาราชการ ประจำปีการศึกษา',$styleFont,$styleParagraph);
	$section->addImage('images/line.png',array('align'=>'center'));
	//end head
	$objTextRun = $section->createTextRun('Frankie Says"');
	$objTextRun->addText('สำหรับผู้สมัคร  ', array('name'=>'TH SarabunPSK', 'size'=>18, 'underline'=>PHPWord_Style_Font::UNDERLINE_SINGLE), array('marginLeft'=>100));
	$objTextRun->addText(': เติมข้อความในช่องว่างและเติมเครื่องหมาย (  ', array('name'=>'TH SarabunPSK', 'size'=>16));
	$objTextRun->addImage('images/01.png');
	$objTextRun->addText(' )  หน้าข้อความตามความเป็นจริง', array('name'=>'TH SarabunPSK', 'size'=>16));
	
	// Define table style arrays
$styleTable = array('borderSize'=>6, 'borderColor'=>'006699');
$styleFirstRow = array('bgColor'=>'CCCCCC');

// Define cell style arrays
$styleCell = array('valign'=>'center');
$styleCell2 = array('valign'=>'center', 'borderSize'=>0);
$styleCellBTLR = array('valign'=>'center', 'textDirection'=>PHPWord_Style_Cell::TEXT_DIR_BTLR);

// Define font style for first row
$fontStyle = array('align'=>'center', 'name'=>'TH SarabunPSK', 'size'=>16);

// Add table style
$PHPWord->addTableStyle('myOwnTableStyle', $styleTable, $styleFirstRow);

// Add table
$table = $section->addTable('myOwnTableStyle');

// Add row
$table->addRow(100);

// Add cells
$table->addCell(2000, $styleCell2)->addText('1. ห้องเรียนจังหวัด', $fontStyle);
$table->addCell(8000, $styleCell2)->addText('2. วุฒิการศึกษาที่ใช้สมัคร', $fontStyle);

// Add more rows / cells

	$table->addRow(1000);
	$cell = $table->addCell(1000, $cellStyle);
	$cell->addImage('images/01.png');
	$cell->addText("Line 2", $fontStyle, $paragraphStyle);

	$cell = $table->addCell(1000, $cellStyle);
	$cell->addText("Line 3", $fontStyle, $paragraphStyle);
	$cell->addText("Line 3", $fontStyle, $paragraphStyle);


	$obj = PHPWord_IOFactory::createWriter($PHPWord, 'word2007');
	$obj->save('MyDoc/report.docx');
//	$document->addPageBreak();
?>