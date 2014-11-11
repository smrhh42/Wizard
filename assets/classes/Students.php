<?php
ini_set('memory_limit', '512M');
// Report all PHP errors
error_reporting(-1);

require_once(dirname(__FILE__)).'/../core/init.php';

class Students
{
	
	private $Students;
	
	public
	  $Student_Id,
	  $Term_Code,
	  $Name_Last,
	  $Name_First,
	  $Tu_Id,
	  $Name_Full,
	  $Name_Prefix,
	  $Name_Suffix,
	  $College,
	  $Student_Type_Code,
	  $Student_Status_Code,
	  $Education_Goal_Code,
	  $Education_Goal_Description,
	  $Expected_Graduation_Date,
	  $First_Semister_Attened,
	  $Last_Semister_Attened,
	  $Admissions_Term,
	  $Catalog_Term,
	  $Last_Term_Avalible,
	  $Hold_Indicator,
	  $Registration_Status_Code,
	  $Registration_Status_Description,
	  $Recidency_Code,
	  $Recidency_Description,
	  $Co_Op_Code1,
	  $Co_Op_Code2,
	  $Co_Op_Code3,
	  $Email_Type_Code,
	  $Email_Type_Address,
	  $Confidentiality_Indicator,
	  $Deceased_Indicator,
	  $Birth_Date,
	  $Gender,
	  $Hispanic_Indicator,
	  $Reported_Race,
	  $Race,
	  $International_Reported_race,
	  $Employee_Indicator,
	  $Veteran_Indicator,
	  $Marital_Status_Code,
	  $Religion_Code,
	  $Financial_Aid_Year,
	  $Financial_Aid_Application_Recieved_Date,
	  $Bill_Date,
	  $Bill_Due_Date,
	  $Payment_Status,
	  $Payment_Status_Date,
	  $Term_Balace,
	  $Total_Account_Balance,
	  $Address_Type_Code,
	  $Address_Type_Description,
	  $Address_Street_Line1,
	  $Address_Street_Line2,
	  $Address_City,
	  $Address_State_Code,
	  $Address_Zip,
	  $Address_County_Code,
	  $Address_County_Description,
	  $Address_nation_Code,
	  $Address_Nation_Description,
	  $Phone_Number,
	  $Phone_Extension,
	  $Associated_Campus_Ambler_Indicator,
	  $Associated_Campus_Center_City_Indicator,
	  $Associated_Campus_Fort_Washington_Indicator,
	  $Associated_Campus_Harrisburg_Indicator,
	  $Associated_Campus_HSC_Indicator,
	  $Associated_Campus_Main_Indicator,
	  $Associated_Campus_Online_Indicator,
	  $Hours_Attempted_UG,
	  $Hours_Passed_UG,
	  $GPA_Hours_UG,
	  $Grade_Points_UG,
	  $GPA_UG,
	  $Overall_passed_UG,
	  $Transfer_Hours_UG,
	  $Cumulative_Credits_UG,
	  $Cumulative_Quality_Points_UG,
	  $Graduate_Level_Code,
	  $Hours_Attempted_G,
	  $Hours_Passed_G,
	  $GPA_Hours_G,
	  $Grade_Points_G,
	  $GPA_G,
	  $Overrall_Hours_Passed_G,
	  $Transfer_Hours_G,
	  $Cumulative_Credits_G,
	  $Cumulative_Quality_Points_G,
	  $Profrssional_Level_Code,
	  $Hours_Attempted_P,
	  $Hours_Passed_P,
	  $GPA_Hours,
	  $Grade_Points_P,
	  $GPA_P,
	  $Overall_Hours_Passed_P,
	  $Transfer_Hours_P,
	  $Cumulative_Credits_P,
	  $cumulative_Quality_Points,
	  $Continuing_Education_Level_Code,
	  $Hours_Attempted_CE,
	  $Hours_Passed_CE,
	  $GPA_Hours_CE,
	  $Grades_Points_CE,
	  $GPA_CE,
	  $Overall_Hours_Passed_CE,
	  $Transfer_Hours_Passed,
	  $Cumulative_Credits_CE,
	  $Cumulative_Qulity_Points_CE,
	  $REgistration_Status_Date,
	  $Registration_Change_Date,
	  $CAlculated_Campus_Code,
	  $Calculated_Campus_Description,
	  $Campus_Of_Record,
	  $Campus_Of_Record_Description,
	  $Hours_Registerd,
	  $Initial_Registration_Date,
	  $Time_Status_Code,
	  $Time_Status_Date,
	  $Maximum_Hours_Allowed,
	  $College_1_Description,
	  $Program_1,
	  $Level_1_Code,
	  $Level_1_Description,
	  $Class_1_Code,
	  $Class_1_description,
	  $Degree_1_Code,
	  $Degree_1_Description,
	  $Curriculum1_1,
	  $Curriculum1_1_Description,
	  $Curriculum1_2,
	  $Curriculum1_2_Description,
	  $Concentration_1_1,
	  $Concentration_1_1_Descripton,
	  $Concentration_1_2,
	  $Concentration1_2_Description,
	  $Minor1_1,
	  $Minor1_1_Description,
	  $Minor1_2,
	  $Minor1_2_Description,
	  $College_2_Code,
	  $College_2_Description,
	  $Program_2,
	  $Level_2_Code,
	  $Level_2_Description,
	  $Class_2_Code,
	  $Class_2_Description,
	  $Degree_2_Code,
	  $Degree_2_Description,
	  $Curriculum_2_1,
	  $Curriculum_2_1_Description,
	  $Curriculum_2_2,
	  $Curriculum_2_2_Description,
	  $Concentration_2_1,
	  $Concentraction_2_1_Description,
	  $Concentration_2_2,
	  $Concentration_2_2_Description,
	  $Visa_Type_Code,
	  $Visa_Type_Description,
	  $VIsa_No,
	  $Visa_Start_Date,
	  $Visa_Expiration_Date,
	  $Citizenship_Indicator,
	  $Citizenship_Decription,
	  $Activity_1_Code,
	  $Activity_1_Description,
	  $Activity_2_Code,
	  $Activity_2_Description,
	  $Sport_1,
	  $Sport_1_Description,
	  $Sport_1_Status_Code,
	  $Sport_1_Status_Description,
	  $Sport_2,
	  $Sport_2_Description,
	  $Sport_2_Status_Code,
	  $Sport_2_Status_Description,
	  $Sport_3,
	  $Sport_3_Description,
	  $Sport_3_Status_Code,
	  $Sport_3_Status_Description,
	  $Attribute_1_Code,
	  $Attribute_1_Description,
	  $Attribute_1_Effective_Term,
	  $Attribute_2_Code,
	  $Attribute_2_Description,
	  $Attribute_2_Effective_Term,
	  $Attribute_3_Code,
	  $Attribute_3_Description,
	  $Attribute_3_Effective_Term,
	  $Attribute_4_Code,
	  $Attribute_4_Description,
	  $Attribute_4_Effective_Term,
	  $Attribute_5_Code,
	  $Attribute_5_Description,
	  $Attribute_5_Effective_Term,
	  $Cohort_1_Code,
	  $Cohort_1_Description,
	  $Cohort_1_Effective_Term,
	  $Cohort_2_Code,
	  $Cohort_2_Desription,
	  $Cohort_2_Effective_Term,
	  $Cohort_3_Code,
	  $Cohort_3_description,
	  $Cohort_3_Effective_Term,
	  $Cohort_4_Code,
	  $Cohort_4_Description,
	  $Cohort_4_Effective_Term,
	  $Cohort_5_Code,
	  $Cohort_5_Description,
	  $Cohort_5_Effective_Term,
	  $Cohort_6_Code,
	  $Cohot_6_Description,
	  $Cohort_6_Effective_Term,
	  $Cohort_7_Code,
	  $Cohort_7_Description,
	  $Cohort_7_Effective_Term,
	  $Cohort_8_Code,
	  $Cohort_8_Description,
	  $Cohort_8_Effective_Term,
	  $Cohort_9_Code,
	  $Cohort_9_Description,
	  $Cohort_Effective_Term,
	  $Cohort_10_Code,
	  $Cohort_10_Descroption,
	  $Cohort_10_Effective_Term;
	
	
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
		
		
		
		
	public function Insert_Students($lineArray){
		
		
			
	/// Check if the user is on the database
	/// $lineArray[3] is the 4 column on the array which correspond with Tu_Id
	
	if($lineArray[3] == ""){
		return 0;
	}else {
	
			$checkIdStudent = $this->_db->prepare("SELECT * FROM STUDENT WHERE Tu_Id = ?");
			$checkIdStudent->bindParam(1,$lineArray[3]);
			$checkIdStudent->execute();
			
			if($checkIdStudent->rowCount() == 1){
				
				$result = $checkIdStudent->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
				$this->Student_Id 		= $result['Student_Id'];
				
				
				//return "Student already on database \n   UPDATING ...";
				
				$UpdateStudent = new Students();
				$UpdateStudent->Update_Students(
				$lineArray[0],
				$lineArray[1],
				$lineArray[2],
				$lineArray[3],
				$lineArray[4],
				$lineArray[5],
				$lineArray[6],
				$lineArray[7],
				$lineArray[8],
				$lineArray[9],
				$lineArray[10],
				$lineArray[11],
				$lineArray[12],
				$lineArray[13],
				$lineArray[14],
				$lineArray[15],
				$lineArray[16],
				$lineArray[17],
				$lineArray[18],
				$lineArray[19],
				$lineArray[20],
				$lineArray[21],
				$lineArray[22],
				$lineArray[23],
				$lineArray[24],
				$lineArray[25],
				$lineArray[26],
				$lineArray[27],
				$lineArray[28],
				$lineArray[29],
				$lineArray[30],
				$lineArray[31],
				$lineArray[32],
				$lineArray[33],
				$lineArray[34],
				$lineArray[35],
				$lineArray[36],
				$lineArray[37],
				$lineArray[38],
				$lineArray[39],
				$lineArray[40],
				$lineArray[41],
				$lineArray[42],
				$lineArray[43],
				$lineArray[44],
				$lineArray[45],
				$lineArray[46],
				$lineArray[47],
				$lineArray[48],
				$lineArray[49],
				$lineArray[50],
				$lineArray[51],
				$lineArray[52],
				$lineArray[53],
				$lineArray[54],
				$lineArray[55],
				$lineArray[56],
				$lineArray[57],
				$lineArray[58],
				$lineArray[59],
				$lineArray[60],
				$lineArray[61],
				$lineArray[62],
				$lineArray[63],
				$lineArray[64],
				$lineArray[65],
				$lineArray[66],
				$lineArray[67],
				$lineArray[68],
				$lineArray[69],
				$lineArray[70],
				$lineArray[71],
				$lineArray[72],
				$lineArray[73],
				$lineArray[74],
				$lineArray[75],
				$lineArray[76],
				$lineArray[77],
				$lineArray[78],
				$lineArray[79],
				$lineArray[80],
				$lineArray[81],
				$lineArray[82],
				$lineArray[83],
				$lineArray[84],
				$lineArray[85],
				$lineArray[86],
				$lineArray[87],
				$lineArray[88],
				$lineArray[89],
				$lineArray[90],
				$lineArray[91],
				$lineArray[92],
				$lineArray[93],
				$lineArray[94],
				$lineArray[95],
				$lineArray[96],
				$lineArray[97],
				$lineArray[98],
				$lineArray[99],
				$lineArray[100],
				$lineArray[101],
				$lineArray[102],
				$lineArray[103],
				$lineArray[104],
				$lineArray[105],
				$lineArray[106],
				$lineArray[107],
				$lineArray[108],
				$lineArray[109],
				$lineArray[110],
				$lineArray[111],
				$lineArray[112],
				$lineArray[113],
				$lineArray[114],
				$lineArray[115],
				$lineArray[116],
				$lineArray[117],
				$lineArray[118],
				$lineArray[119],
				$lineArray[120],
				$lineArray[121],
				$lineArray[122],
				$lineArray[123],
				$lineArray[124],
				$lineArray[125],
				$lineArray[126],
				$lineArray[127],
				$lineArray[128],
				$lineArray[129],
				$lineArray[130],
				$lineArray[131],
				$lineArray[132],
				$lineArray[133],
				$lineArray[134],
				$lineArray[135],
				$lineArray[136],
				$lineArray[137],
				$lineArray[138],
				$lineArray[139],
				$lineArray[140],
				$lineArray[141],
				$lineArray[142],
				$lineArray[143],
				$lineArray[144],
				$lineArray[145],
				$lineArray[146],
				$lineArray[147],
				$lineArray[148],
				$lineArray[149],
				$lineArray[150],
				$lineArray[151],
				$lineArray[152],
				$lineArray[153],
				$lineArray[154],
				$lineArray[155],
				$lineArray[156],
				$lineArray[157],
				$lineArray[158],
				$lineArray[159],
				$lineArray[160],
				$lineArray[161],
				$lineArray[162],
				$lineArray[163],
				$lineArray[164],
				$lineArray[165],
				$lineArray[166],
				$lineArray[167],
				$lineArray[168],
				$lineArray[169],
				$lineArray[170],
				$lineArray[171],
				$lineArray[172],
				$lineArray[173],
				$lineArray[174],
				$lineArray[175],
				$lineArray[176],
				$lineArray[177],
				$lineArray[178],
				$lineArray[179],
				$lineArray[180],
				$lineArray[181],
				$lineArray[182],
				$lineArray[183],
				$lineArray[184],
				$lineArray[185],
				$lineArray[186],
				$lineArray[187],
				$lineArray[188],
				$lineArray[189],
				$lineArray[190],
				$lineArray[191],
				$lineArray[192],
				$lineArray[193],
				$lineArray[194],
				$lineArray[195],
				$lineArray[196],
				$lineArray[197],
				$lineArray[198],
				$lineArray[199],
				$lineArray[200],
				$lineArray[201],
				$lineArray[202],
				$lineArray[203],
				$lineArray[204],
				$lineArray[205],
				$lineArray[206],
				$lineArray[207],
				$lineArray[208],
				$lineArray[209],
				$lineArray[210],
				$lineArray[211],
				$lineArray[212],
				$lineArray[213],
				$lineArray[214],
				$lineArray[215],
				$lineArray[216],
				$lineArray[217],
				$lineArray[218],
				$lineArray[219],
				$lineArray[220],
				$lineArray[221],
				$lineArray[222],
				$this->Student_Id);
			
				
				return "user Updated";
				
				
				////// END UPDATING DATA
			
			
			 }else{
			
			$sql = "INSERT INTO STUDENT (`Term_Code`, `Name_Last`, `Name_First`, `Tu_Id`, `Name_Full`, `Name_Prefix`, `Name_Suffix`, `College`, `Student_Type_Code`, `Student_Status_Code`, `Education_Goal_Code`, `Education_Goal_Description`, `Expected_Graduation_Date`, `First_Semister_Attened`, `Last_Semister_Attened`, `Admissions_Term`, `Catalog_Term`, `Last_Term_Avalible`, `Hold_Indicator`, `Registration_Status_Code`, `Registration_Status_Description`, `Recidency_Code`, `Recidency_Description`, `Co_Op_Code1`, `Co_Op_Code2`, `Co_Op_Code3`, `Email_Type_Code`, `Email_Type_Address`, `Confidentiality_Indicator`, `Deceased_Indicator`, `Birth_Date`, `Gender`, `Hispanic_Indicator`, `Reported_Race`, `Race`, `International_Reported_race`, `Employee_Indicator`, `Veteran_Indicator`, `Marital_Status_Code`, `Religion_Code`, `Financial_Aid_Year`, `Financial_Aid_Application_Recieved_Date`, `Bill_Date`, `Bill_Due_Date`, `Payment_Status`, `Payment_Status_Date`, `Term_Balace`, `Total_Account_Balance`, `Address_Type_Code`, `Address_Type_Description`, `Address_Street_Line1`, `Address_Street_Line2`, `Address_City`, `Address_State_Code`, `Address_Zip`, `Address_County_Code`, `Address_County_Description`, `Address_nation_Code`, `Address_Nation_Description`, `Phone_Number`, `Phone_Extension`, `Associated_Campus_Ambler_Indicator`, `Associated_Campus_Center_City_Indicator`, `Associated_Campus_Fort_Washington_Indicator`, `Associated_Campus_Harrisburg_Indicator`, `Associated_Campus_HSC_Indicator`, `Associated_Campus_Main_Indicator`, `Associated_Campus_Online_Indicator`, `Hours_Attempted_UG`, `Hours_Passed_UG`, `GPA_Hours_UG`, `Grade_Points_UG`, `GPA_UG`, `Overall_passed_UG`, `Transfer_Hours_UG`, `Cumulative_Credits_UG`, `Cumulative_Quality_Points_UG`, `Graduate_Level_Code`, `Hours_Attempted_G`, `Hours_Passed_G`, `GPA_Hours_G`, `Grade_Points_G`, `GPA_G`, `Overrall_Hours_Passed_G`, `Transfer_Hours_G`, `Cumulative_Credits_G`, `Cumulative_Quality_Points_G`, `Profrssional_Level_Code`, `Hours_Attempted_P`, `Hours_Passed_P`, `GPA_Hours`, `Grade_Points_P`, `GPA_P`, `Overall_Hours_Passed_P`, `Transfer_Hours_P`, `Cumulative_Credits_P`, `cumulative_Quality_Points`, `Continuing_Education_Level_Code`, `Hours_Attempted_CE`, `Hours_Passed_CE`, `GPA_Hours_CE`, `Grades_Points_CE`, `GPA_CE`, `Overall_Hours_Passed_CE`, `Transfer_Hours_Passed`, `Cumulative_Credits_CE`, `Cumulative_Qulity_Points_CE`, `REgistration_Status_Date`, `Registration_Change_Date`, `CAlculated_Campus_Code`, `Calculated_Campus_Description`, `Campus_Of_Record`, `Campus_Of_Record_Description`, `Hours_Registerd`, `Initial_Registration_Date`, `Time_Status_Code`, `Time_Status_Date`, `Maximum_Hours_Allowed`, `College_1_Description`, `Program_1`, `Level_1_Code`, `Level_1_Description`, `Class_1_Code`, `Class_1_description`, `Degree_1_Code`, `Degree_1_Description`, `Curriculum1_1`, `Curriculum1_1_Description`, `Curriculum1_2`, `Curriculum1_2_Description`, `Concentration_1_1`, `Concentration_1_1_Descripton`, `Concentration_1_2`, `Concentration1_2_Description`, `Minor1_1`, `Minor1_1_Description`, `Minor1_2`, `Minor1_2_Description`, `College_2_Code`, `College_2_Description`, `Program_2`, `Level_2_Code`, `Level_2_Description`, `Class_2_Code`, `Class_2_Description`, `Degree_2_Code`, `Degree_2_Description`, `Curriculum_2_1`, `Curriculum_2_1_Description`, `Curriculum_2_2`, `Curriculum_2_2_Description`, `Concentration_2_1`, `Concentraction_2_1_Description`, `Concentration_2_2`, `Concentration_2_2_Description`, `Visa_Type_Code`, `Visa_Type_Description`, `VIsa_No`, `Visa_Start_Date`, `Visa_Expiration_Date`, `Citizenship_Indicator`, `Citizenship_Decription`, `Activity_1_Code`, `Activity_1_Description`, `Activity_2_Code`, `Activity_2_Description`, `Sport_1`, `Sport_1_Description`, `Sport_1_Status_Code`, `Sport_1_Status_Description`, `Sport_2`, `Sport_2_Description`, `Sport_2_Status_Code`, `Sport_2_Status_Description`, `Sport_3`, `Sport_3_Description`, `Sport_3_Status_Code`, `Sport_3_Status_Description`, `Attribute_1_Code`, `Attribute_1_Description`, `Attribute_1_Effective_Term`, `Attribute_2_Code`, `Attribute_2_Description`, `Attribute_2_Effective_Term`, `Attribute_3_Code`, `Attribute_3_Description`, `Attribute_3_Effective_Term`, `Attribute_4_Code`, `Attribute_4_Description`, `Attribute_4_Effective_Term`, `Attribute_5_Code`, `Attribute_5_Description`, `Attribute_5_Effective_Term`, `Cohort_1_Code`, `Cohort_1_Description`, `Cohort_1_Effective_Term`, `Cohort_2_Code`, `Cohort_2_Desription`, `Cohort_2_Effective_Term`, `Cohort_3_Code`, `Cohort_3_description`, `Cohort_3_Effective_Term`, `Cohort_4_Code`, `Cohort_4_Description`, `Cohort_4_Effective_Term`, `Cohort_5_Code`, `Cohort_5_Description`, `Cohort_5_Effective_Term`, `Cohort_6_Code`, `Cohot_6_Description`, `Cohort_6_Effective_Term`, `Cohort_7_Code`, `Cohort_7_Description`, `Cohort_7_Effective_Term`, `Cohort_8_Code`, `Cohort_8_Description`, `Cohort_8_Effective_Term`, `Cohort_9_Code`, `Cohort_9_Description`, `Cohort_Effective_Term`, `Cohort_10_Code`, `Cohort_10_Descroption`, `Cohort_10_Effective_Term`) 
 VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		
		
		
			
			$N = 1;
	
	  $query_Insert = $this->_db->prepare($sql);
			 $query_Insert->bindParam($N++,$lineArray[0]);
			 $query_Insert->bindParam($N++,$lineArray[1]);
			 $query_Insert->bindParam($N++,$lineArray[2]);
			 $query_Insert->bindParam($N++,$lineArray[3]);
			 $query_Insert->bindParam($N++,$lineArray[4]);
			 $query_Insert->bindParam($N++,$lineArray[5]);
			 $query_Insert->bindParam($N++,$lineArray[6]);
			 $query_Insert->bindParam($N++,$lineArray[7]);
			 $query_Insert->bindParam($N++,$lineArray[8]);
			 $query_Insert->bindParam($N++,$lineArray[9]);
			 $query_Insert->bindParam($N++,$lineArray[10]);
			 $query_Insert->bindParam($N++,$lineArray[11]);
			 $query_Insert->bindParam($N++,$lineArray[12]);
			 $query_Insert->bindParam($N++,$lineArray[13]);
			 $query_Insert->bindParam($N++,$lineArray[14]);
			 $query_Insert->bindParam($N++,$lineArray[15]);
			 $query_Insert->bindParam($N++,$lineArray[16]);
			 $query_Insert->bindParam($N++,$lineArray[17]);
			 $query_Insert->bindParam($N++,$lineArray[18]);
			 $query_Insert->bindParam($N++,$lineArray[19]);
			 $query_Insert->bindParam($N++,$lineArray[20]);
			 $query_Insert->bindParam($N++,$lineArray[21]);
			 $query_Insert->bindParam($N++,$lineArray[22]);
			 $query_Insert->bindParam($N++,$lineArray[23]);
			 $query_Insert->bindParam($N++,$lineArray[24]);
			 $query_Insert->bindParam($N++,$lineArray[25]);
			 $query_Insert->bindParam($N++,$lineArray[26]);
			 $query_Insert->bindParam($N++,$lineArray[27]);
			 $query_Insert->bindParam($N++,$lineArray[28]);
			 $query_Insert->bindParam($N++,$lineArray[29]);
			 $query_Insert->bindParam($N++,$lineArray[30]);
			 $query_Insert->bindParam($N++,$lineArray[31]);
			 $query_Insert->bindParam($N++,$lineArray[32]);
			 $query_Insert->bindParam($N++,$lineArray[33]);
			 $query_Insert->bindParam($N++,$lineArray[34]);
			 $query_Insert->bindParam($N++,$lineArray[35]);
			 $query_Insert->bindParam($N++,$lineArray[36]);
			 $query_Insert->bindParam($N++,$lineArray[37]);
			 $query_Insert->bindParam($N++,$lineArray[38]);
			 $query_Insert->bindParam($N++,$lineArray[39]);
			 $query_Insert->bindParam($N++,$lineArray[40]);
			 $query_Insert->bindParam($N++,$lineArray[41]);
			 $query_Insert->bindParam($N++,$lineArray[42]);
			 $query_Insert->bindParam($N++,$lineArray[43]);
			 $query_Insert->bindParam($N++,$lineArray[44]);
			 $query_Insert->bindParam($N++,$lineArray[45]);
			 $query_Insert->bindParam($N++,$lineArray[46]);
			 $query_Insert->bindParam($N++,$lineArray[47]);
			 $query_Insert->bindParam($N++,$lineArray[48]);
			 $query_Insert->bindParam($N++,$lineArray[49]);
			 $query_Insert->bindParam($N++,$lineArray[50]);
			 $query_Insert->bindParam($N++,$lineArray[51]);
			 $query_Insert->bindParam($N++,$lineArray[52]);
			 $query_Insert->bindParam($N++,$lineArray[53]);
			 $query_Insert->bindParam($N++,$lineArray[54]);
			 $query_Insert->bindParam($N++,$lineArray[55]);
			 $query_Insert->bindParam($N++,$lineArray[56]);
			 $query_Insert->bindParam($N++,$lineArray[57]);
			 $query_Insert->bindParam($N++,$lineArray[58]);
			 $query_Insert->bindParam($N++,$lineArray[59]);
			 $query_Insert->bindParam($N++,$lineArray[60]);
			 $query_Insert->bindParam($N++,$lineArray[61]);
			 $query_Insert->bindParam($N++,$lineArray[62]);
			 $query_Insert->bindParam($N++,$lineArray[63]);
			 $query_Insert->bindParam($N++,$lineArray[64]);
			 $query_Insert->bindParam($N++,$lineArray[65]);
			 $query_Insert->bindParam($N++,$lineArray[66]);
			 $query_Insert->bindParam($N++,$lineArray[67]);
			 $query_Insert->bindParam($N++,$lineArray[68]);
			 $query_Insert->bindParam($N++,$lineArray[69]);
			 $query_Insert->bindParam($N++,$lineArray[70]);
			 $query_Insert->bindParam($N++,$lineArray[71]);
			 $query_Insert->bindParam($N++,$lineArray[72]);
			 $query_Insert->bindParam($N++,$lineArray[73]);
			 $query_Insert->bindParam($N++,$lineArray[74]);
			 $query_Insert->bindParam($N++,$lineArray[75]);
			 $query_Insert->bindParam($N++,$lineArray[76]);
			 $query_Insert->bindParam($N++,$lineArray[77]);
			 $query_Insert->bindParam($N++,$lineArray[78]);
			 $query_Insert->bindParam($N++,$lineArray[79]);
			 $query_Insert->bindParam($N++,$lineArray[80]);
			 $query_Insert->bindParam($N++,$lineArray[81]);
			 $query_Insert->bindParam($N++,$lineArray[82]);
			 $query_Insert->bindParam($N++,$lineArray[83]);
			 $query_Insert->bindParam($N++,$lineArray[84]);
			 $query_Insert->bindParam($N++,$lineArray[85]);
			 $query_Insert->bindParam($N++,$lineArray[86]);
			 $query_Insert->bindParam($N++,$lineArray[87]);
			 $query_Insert->bindParam($N++,$lineArray[88]);
			 $query_Insert->bindParam($N++,$lineArray[89]);
			 $query_Insert->bindParam($N++,$lineArray[90]);
			 $query_Insert->bindParam($N++,$lineArray[91]);
			 $query_Insert->bindParam($N++,$lineArray[92]);
			 $query_Insert->bindParam($N++,$lineArray[93]);
			 $query_Insert->bindParam($N++,$lineArray[94]);
			 $query_Insert->bindParam($N++,$lineArray[95]);
			 $query_Insert->bindParam($N++,$lineArray[96]);
			 $query_Insert->bindParam($N++,$lineArray[97]);
			 $query_Insert->bindParam($N++,$lineArray[98]);
			 $query_Insert->bindParam($N++,$lineArray[99]);
			 $query_Insert->bindParam($N++,$lineArray[100]);
			 $query_Insert->bindParam($N++,$lineArray[101]);
			 $query_Insert->bindParam($N++,$lineArray[102]);
			 $query_Insert->bindParam($N++,$lineArray[103]);
			 $query_Insert->bindParam($N++,$lineArray[104]);
			 $query_Insert->bindParam($N++,$lineArray[105]);
			 $query_Insert->bindParam($N++,$lineArray[106]);
			 $query_Insert->bindParam($N++,$lineArray[107]);
			 $query_Insert->bindParam($N++,$lineArray[108]);
			 $query_Insert->bindParam($N++,$lineArray[109]);
			 $query_Insert->bindParam($N++,$lineArray[110]);
			 $query_Insert->bindParam($N++,$lineArray[111]);
			 $query_Insert->bindParam($N++,$lineArray[112]);
			 $query_Insert->bindParam($N++,$lineArray[113]);
			 $query_Insert->bindParam($N++,$lineArray[114]);
			 $query_Insert->bindParam($N++,$lineArray[115]);
			 $query_Insert->bindParam($N++,$lineArray[116]);
			 $query_Insert->bindParam($N++,$lineArray[117]);
			 $query_Insert->bindParam($N++,$lineArray[118]);
			 $query_Insert->bindParam($N++,$lineArray[119]);
			 $query_Insert->bindParam($N++,$lineArray[120]);
			 $query_Insert->bindParam($N++,$lineArray[121]);
			 $query_Insert->bindParam($N++,$lineArray[122]);
			 $query_Insert->bindParam($N++,$lineArray[123]);
			 $query_Insert->bindParam($N++,$lineArray[124]);
			 $query_Insert->bindParam($N++,$lineArray[125]);
			 $query_Insert->bindParam($N++,$lineArray[126]);
			 $query_Insert->bindParam($N++,$lineArray[127]);
			 $query_Insert->bindParam($N++,$lineArray[128]);
			 $query_Insert->bindParam($N++,$lineArray[129]);
			 $query_Insert->bindParam($N++,$lineArray[130]);
			 $query_Insert->bindParam($N++,$lineArray[131]);
			 $query_Insert->bindParam($N++,$lineArray[132]);
			 $query_Insert->bindParam($N++,$lineArray[133]);
			 $query_Insert->bindParam($N++,$lineArray[134]);
			 $query_Insert->bindParam($N++,$lineArray[135]);
			 $query_Insert->bindParam($N++,$lineArray[136]);
			 $query_Insert->bindParam($N++,$lineArray[137]);
			 $query_Insert->bindParam($N++,$lineArray[138]);
			 $query_Insert->bindParam($N++,$lineArray[139]);
			 $query_Insert->bindParam($N++,$lineArray[140]);
			 $query_Insert->bindParam($N++,$lineArray[141]);
			 $query_Insert->bindParam($N++,$lineArray[142]);
			 $query_Insert->bindParam($N++,$lineArray[143]);
			 $query_Insert->bindParam($N++,$lineArray[144]);
			 $query_Insert->bindParam($N++,$lineArray[145]);
			 $query_Insert->bindParam($N++,$lineArray[146]);
			 $query_Insert->bindParam($N++,$lineArray[147]);
			 $query_Insert->bindParam($N++,$lineArray[148]);
			 $query_Insert->bindParam($N++,$lineArray[149]);
			 $query_Insert->bindParam($N++,$lineArray[150]);
			 $query_Insert->bindParam($N++,$lineArray[151]);
			 $query_Insert->bindParam($N++,$lineArray[152]);
			 $query_Insert->bindParam($N++,$lineArray[153]);
			 $query_Insert->bindParam($N++,$lineArray[154]);
			 $query_Insert->bindParam($N++,$lineArray[155]);
			 $query_Insert->bindParam($N++,$lineArray[156]);
			 $query_Insert->bindParam($N++,$lineArray[157]);
			 $query_Insert->bindParam($N++,$lineArray[158]);
			 $query_Insert->bindParam($N++,$lineArray[159]);
			 $query_Insert->bindParam($N++,$lineArray[160]);
			 $query_Insert->bindParam($N++,$lineArray[161]);
			 $query_Insert->bindParam($N++,$lineArray[162]);
			 $query_Insert->bindParam($N++,$lineArray[163]);
			 $query_Insert->bindParam($N++,$lineArray[164]);
			 $query_Insert->bindParam($N++,$lineArray[165]);
			 $query_Insert->bindParam($N++,$lineArray[166]);
			 $query_Insert->bindParam($N++,$lineArray[167]);
			 $query_Insert->bindParam($N++,$lineArray[168]);
			 $query_Insert->bindParam($N++,$lineArray[169]);
			 $query_Insert->bindParam($N++,$lineArray[170]);
			 $query_Insert->bindParam($N++,$lineArray[171]);
			 $query_Insert->bindParam($N++,$lineArray[172]);
			 $query_Insert->bindParam($N++,$lineArray[173]);
			 $query_Insert->bindParam($N++,$lineArray[174]);
			 $query_Insert->bindParam($N++,$lineArray[175]);
			 $query_Insert->bindParam($N++,$lineArray[176]);
			 $query_Insert->bindParam($N++,$lineArray[177]);
			 $query_Insert->bindParam($N++,$lineArray[178]);
			 $query_Insert->bindParam($N++,$lineArray[179]);
			 $query_Insert->bindParam($N++,$lineArray[180]);
			 $query_Insert->bindParam($N++,$lineArray[181]);
			 $query_Insert->bindParam($N++,$lineArray[182]);
			 $query_Insert->bindParam($N++,$lineArray[183]);
			 $query_Insert->bindParam($N++,$lineArray[184]);
			 $query_Insert->bindParam($N++,$lineArray[185]);
			 $query_Insert->bindParam($N++,$lineArray[186]);
			 $query_Insert->bindParam($N++,$lineArray[187]);
			 $query_Insert->bindParam($N++,$lineArray[188]);
			 $query_Insert->bindParam($N++,$lineArray[189]);
			 $query_Insert->bindParam($N++,$lineArray[190]);
			 $query_Insert->bindParam($N++,$lineArray[191]);
			 $query_Insert->bindParam($N++,$lineArray[192]);
			 $query_Insert->bindParam($N++,$lineArray[193]);
			 $query_Insert->bindParam($N++,$lineArray[194]);
			 $query_Insert->bindParam($N++,$lineArray[195]);
			 $query_Insert->bindParam($N++,$lineArray[196]);
			 $query_Insert->bindParam($N++,$lineArray[197]);
			 $query_Insert->bindParam($N++,$lineArray[198]);
			 $query_Insert->bindParam($N++,$lineArray[199]);
			 $query_Insert->bindParam($N++,$lineArray[200]);
			 $query_Insert->bindParam($N++,$lineArray[201]);
			 $query_Insert->bindParam($N++,$lineArray[202]);
			 $query_Insert->bindParam($N++,$lineArray[203]);
			 $query_Insert->bindParam($N++,$lineArray[204]);
			 $query_Insert->bindParam($N++,$lineArray[205]);
			 $query_Insert->bindParam($N++,$lineArray[206]);
			 $query_Insert->bindParam($N++,$lineArray[207]);
			 $query_Insert->bindParam($N++,$lineArray[208]);
			 $query_Insert->bindParam($N++,$lineArray[209]);
			 $query_Insert->bindParam($N++,$lineArray[210]);
			 $query_Insert->bindParam($N++,$lineArray[211]);
			 $query_Insert->bindParam($N++,$lineArray[212]);
			 $query_Insert->bindParam($N++,$lineArray[213]);
			 $query_Insert->bindParam($N++,$lineArray[214]);
			 $query_Insert->bindParam($N++,$lineArray[215]);
			 $query_Insert->bindParam($N++,$lineArray[216]);
			 $query_Insert->bindParam($N++,$lineArray[217]);
			 $query_Insert->bindParam($N++,$lineArray[218]);
			 $query_Insert->bindParam($N++,$lineArray[219]);
			 $query_Insert->bindParam($N++,$lineArray[220]);
			 $query_Insert->bindParam($N++,$lineArray[221]);
			 $query_Insert->bindParam($N++,$lineArray[222]);
		
				$query_Insert->execute();
				
			$N = 0;	
		}
		
		return 1;
		
	} // End else condition insert Studet
		
		} // End of my else condition
		
	
	
	
	
	
	
public function Update_Students($Term_Code,$Name_Last,$Name_First,
	  $Tu_Id,
	  $Name_Full,
	  $Name_Prefix,
	  $Name_Suffix,
	  $College,
	  $Student_Type_Code,
	  $Student_Status_Code,
	  $Education_Goal_Code,
	  $Education_Goal_Description,
	  $Expected_Graduation_Date,
	  $First_Semister_Attened,
	  $Last_Semister_Attened,
	  $Admissions_Term,
	  $Catalog_Term,
	  $Last_Term_Avalible,
	  $Hold_Indicator,
	  $Registration_Status_Code,
	  $Registration_Status_Description,
	  $Recidency_Code,
	  $Recidency_Description,
	  $Co_Op_Code1,
	  $Co_Op_Code2,
	  $Co_Op_Code3,
	  $Email_Type_Code,
	  $Email_Type_Address,
	  $Confidentiality_Indicator,
	  $Deceased_Indicator,
	  $Birth_Date,
	  $Gender,
	  $Hispanic_Indicator,
	  $Reported_Race,
	  $Race,
	  $International_Reported_race,
	  $Employee_Indicator,
	  $Veteran_Indicator,
	  $Marital_Status_Code,
	  $Religion_Code,
	  $Financial_Aid_Year,
	  $Financial_Aid_Application_Recieved_Date,
	  $Bill_Date,
	  $Bill_Due_Date,
	  $Payment_Status,
	  $Payment_Status_Date,
	  $Term_Balace,
	  $Total_Account_Balance,
	  $Address_Type_Code,
	  $Address_Type_Description,
	  $Address_Street_Line1,
	  $Address_Street_Line2,
	  $Address_City,
	  $Address_State_Code,
	  $Address_Zip,
	  $Address_County_Code,
	  $Address_County_Description,
	  $Address_nation_Code,
	  $Address_Nation_Description,
	  $Phone_Number,
	  $Phone_Extension,
	  $Associated_Campus_Ambler_Indicator,
	  $Associated_Campus_Center_City_Indicator,
	  $Associated_Campus_Fort_Washington_Indicator,
	  $Associated_Campus_Harrisburg_Indicator,
	  $Associated_Campus_HSC_Indicator,
	  $Associated_Campus_Main_Indicator,
	  $Associated_Campus_Online_Indicator,
	  $Hours_Attempted_UG,
	  $Hours_Passed_UG,
	  $GPA_Hours_UG,
	  $Grade_Points_UG,
	  $GPA_UG,
	  $Overall_passed_UG,
	  $Transfer_Hours_UG,
	  $Cumulative_Credits_UG,
	  $Cumulative_Quality_Points_UG,
	  $Graduate_Level_Code,
	  $Hours_Attempted_G,
	  $Hours_Passed_G,
	  $GPA_Hours_G,
	  $Grade_Points_G,
	  $GPA_G,
	  $Overrall_Hours_Passed_G,
	  $Transfer_Hours_G,
	  $Cumulative_Credits_G,
	  $Cumulative_Quality_Points_G,
	  $Profrssional_Level_Code,
	  $Hours_Attempted_P,
	  $Hours_Passed_P,
	  $GPA_Hours,
	  $Grade_Points_P,
	  $GPA_P,
	  $Overall_Hours_Passed_P,
	  $Transfer_Hours_P,
	  $Cumulative_Credits_P,
	  $cumulative_Quality_Points,
	  $Continuing_Education_Level_Code,
	  $Hours_Attempted_CE,
	  $Hours_Passed_CE,
	  $GPA_Hours_CE,
	  $Grades_Points_CE,
	  $GPA_CE,
	  $Overall_Hours_Passed_CE,
	  $Transfer_Hours_Passed,
	  $Cumulative_Credits_CE,
	  $Cumulative_Qulity_Points_CE,
	  $REgistration_Status_Date,
	  $Registration_Change_Date,
	  $CAlculated_Campus_Code,
	  $Calculated_Campus_Description,
	  $Campus_Of_Record,
	  $Campus_Of_Record_Description,
	  $Hours_Registerd,
	  $Initial_Registration_Date,
	  $Time_Status_Code,
	  $Time_Status_Date,
	  $Maximum_Hours_Allowed,
	  $College_1_Description,
	  $Program_1,
	  $Level_1_Code,
	  $Level_1_Description,
	  $Class_1_Code,
	  $Class_1_description,
	  $Degree_1_Code,
	  $Degree_1_Description,
	  $Curriculum1_1,
	  $Curriculum1_1_Description,
	  $Curriculum1_2,
	  $Curriculum1_2_Description,
	  $Concentration_1_1,
	  $Concentration_1_1_Descripton,
	  $Concentration_1_2,
	  $Concentration1_2_Description,
	  $Minor1_1,
	  $Minor1_1_Description,
	  $Minor1_2,
	  $Minor1_2_Description,
	  $College_2_Code,
	  $College_2_Description,
	  $Program_2,
	  $Level_2_Code,
	  $Level_2_Description,
	  $Class_2_Code,
	  $Class_2_Description,
	  $Degree_2_Code,
	  $Degree_2_Description,
	  $Curriculum_2_1,
	  $Curriculum_2_1_Description,
	  $Curriculum_2_2,
	  $Curriculum_2_2_Description,
	  $Concentration_2_1,
	  $Concentraction_2_1_Description,
	  $Concentration_2_2,
	  $Concentration_2_2_Description,
	  $Visa_Type_Code,
	  $Visa_Type_Description,
	  $VIsa_No,
	  $Visa_Start_Date,
	  $Visa_Expiration_Date,
	  $Citizenship_Indicator,
	  $Citizenship_Decription,
	  $Activity_1_Code,
	  $Activity_1_Description,
	  $Activity_2_Code,
	  $Activity_2_Description,
	  $Sport_1,
	  $Sport_1_Description,
	  $Sport_1_Status_Code,
	  $Sport_1_Status_Description,
	  $Sport_2,
	  $Sport_2_Description,
	  $Sport_2_Status_Code,
	  $Sport_2_Status_Description,
	  $Sport_3,
	  $Sport_3_Description,
	  $Sport_3_Status_Code,
	  $Sport_3_Status_Description,
	  $Attribute_1_Code,
	  $Attribute_1_Description,
	  $Attribute_1_Effective_Term,
	  $Attribute_2_Code,
	  $Attribute_2_Description,
	  $Attribute_2_Effective_Term,
	  $Attribute_3_Code,
	  $Attribute_3_Description,
	  $Attribute_3_Effective_Term,
	  $Attribute_4_Code,
	  $Attribute_4_Description,
	  $Attribute_4_Effective_Term,
	  $Attribute_5_Code,
	  $Attribute_5_Description,
	  $Attribute_5_Effective_Term,
	  $Cohort_1_Code,
	  $Cohort_1_Description,
	  $Cohort_1_Effective_Term,
	  $Cohort_2_Code,
	  $Cohort_2_Desription,
	  $Cohort_2_Effective_Term,
	  $Cohort_3_Code,
	  $Cohort_3_description,
	  $Cohort_3_Effective_Term,
	  $Cohort_4_Code,
	  $Cohort_4_Description,
	  $Cohort_4_Effective_Term,
	  $Cohort_5_Code,
	  $Cohort_5_Description,
	  $Cohort_5_Effective_Term,
	  $Cohort_6_Code,
	  $Cohot_6_Description,
	  $Cohort_6_Effective_Term,
	  $Cohort_7_Code,
	  $Cohort_7_Description,
	  $Cohort_7_Effective_Term,
	  $Cohort_8_Code,
	  $Cohort_8_Description,
	  $Cohort_8_Effective_Term,
	  $Cohort_9_Code,
	  $Cohort_9_Description,
	  $Cohort_Effective_Term,
	  $Cohort_10_Code,
	  $Cohort_10_Descroption,
	  $Cohort_10_Effective_Term,
	  $Student_Id){
		
		
		
				
				 $sqlUpdate = "UPDATE STUDENT SET Term_Code= ?, Name_Last= ?, Name_First= ?, Tu_Id= ?, Name_Full= ?, Name_Prefix= ?, Name_Suffix= ?, College= ?, Student_Type_Code= ?, Student_Status_Code= ?, Education_Goal_Code= ?, Education_Goal_Description= ?, Expected_Graduation_Date= ?, First_Semister_Attened= ?, Last_Semister_Attened= ?, Admissions_Term= ?, Catalog_Term= ?, Last_Term_Avalible= ?, Hold_Indicator= ?, Registration_Status_Code= ?, Registration_Status_Description= ?, Recidency_Code= ?, Recidency_Description= ?, Co_Op_Code1= ?, Co_Op_Code2= ?, Co_Op_Code3= ?, Email_Type_Code= ?, Email_Type_Address= ?, Confidentiality_Indicator= ?, Deceased_Indicator= ?, Birth_Date= ?, Gender= ?, Hispanic_Indicator= ?, Reported_Race= ?, Race= ?, International_Reported_race= ?, Employee_Indicator= ?, Veteran_Indicator= ?, Marital_Status_Code= ?, Religion_Code= ?, Financial_Aid_Year= ?, Financial_Aid_Application_Recieved_Date= ?, Bill_Date= ?, Bill_Due_Date= ?, Payment_Status= ?, Payment_Status_Date= ?, Term_Balace= ?, Total_Account_Balance= ?, Address_Type_Code= ?, Address_Type_Description= ?, Address_Street_Line1= ?, Address_Street_Line2= ?, Address_City= ?, Address_State_Code= ?, Address_Zip= ?, Address_County_Code= ?, Address_County_Description= ?, Address_nation_Code= ?, Address_Nation_Description= ?, Phone_Number= ?, Phone_Extension= ?, Associated_Campus_Ambler_Indicator= ?, Associated_Campus_Center_City_Indicator= ?, Associated_Campus_Fort_Washington_Indicator= ?, Associated_Campus_Harrisburg_Indicator= ?, Associated_Campus_HSC_Indicator= ?, Associated_Campus_Main_Indicator= ?, Associated_Campus_Online_Indicator= ?, Hours_Attempted_UG= ?, Hours_Passed_UG= ?, GPA_Hours_UG= ?, Grade_Points_UG= ?, GPA_UG= ?, Overall_passed_UG= ?, Transfer_Hours_UG= ?, Cumulative_Credits_UG= ?, Cumulative_Quality_Points_UG= ?, Graduate_Level_Code= ?, Hours_Attempted_G= ?, Hours_Passed_G= ?, GPA_Hours_G= ?, Grade_Points_G= ?, GPA_G= ?, Overrall_Hours_Passed_G= ?, Transfer_Hours_G= ?, Cumulative_Credits_G= ?, Cumulative_Quality_Points_G= ?, Profrssional_Level_Code= ?, Hours_Attempted_P= ?, Hours_Passed_P= ?, GPA_Hours= ?, Grade_Points_P= ?, GPA_P= ?, Overall_Hours_Passed_P= ?, Transfer_Hours_P= ?, Cumulative_Credits_P= ?, cumulative_Quality_Points= ?, Continuing_Education_Level_Code= ?, Hours_Attempted_CE= ?, Hours_Passed_CE= ?, GPA_Hours_CE= ?, Grades_Points_CE= ?, GPA_CE= ?, Overall_Hours_Passed_CE= ?, Transfer_Hours_Passed= ?, Cumulative_Credits_CE= ?, Cumulative_Qulity_Points_CE= ?, REgistration_Status_Date= ?, Registration_Change_Date= ?, CAlculated_Campus_Code= ?, Calculated_Campus_Description= ?, Campus_Of_Record= ?, Campus_Of_Record_Description= ?, Hours_Registerd= ?, Initial_Registration_Date= ?, Time_Status_Code= ?, Time_Status_Date= ?, Maximum_Hours_Allowed= ?, College_1_Description= ?, Program_1= ?, Level_1_Code= ?, Level_1_Description= ?, Class_1_Code= ?, Class_1_description= ?, Degree_1_Code= ?, Degree_1_Description= ?, Curriculum1_1= ?, Curriculum1_1_Description= ?, Curriculum1_2= ?, Curriculum1_2_Description= ?, Concentration_1_1= ?, Concentration_1_1_Descripton= ?, Concentration_1_2= ?, Concentration1_2_Description= ?, Minor1_1= ?, Minor1_1_Description= ?, Minor1_2= ?, Minor1_2_Description= ?, College_2_Code= ?, College_2_Description= ?, Program_2= ?, Level_2_Code= ?, Level_2_Description= ?, Class_2_Code= ?, Class_2_Description= ?, Degree_2_Code= ?, Degree_2_Description= ?, Curriculum_2_1= ?, Curriculum_2_1_Description= ?, Curriculum_2_2= ?, Curriculum_2_2_Description= ?, Concentration_2_1= ?, Concentraction_2_1_Description= ?, Concentration_2_2= ?, Concentration_2_2_Description= ?, Visa_Type_Code= ?, Visa_Type_Description= ?, VIsa_No= ?, Visa_Start_Date= ?, Visa_Expiration_Date= ?, Citizenship_Indicator= ?, Citizenship_Decription= ?, Activity_1_Code= ?, Activity_1_Description= ?, Activity_2_Code= ?, Activity_2_Description= ?, Sport_1= ?, Sport_1_Description= ?, Sport_1_Status_Code= ?, Sport_1_Status_Description= ?, Sport_2= ?, Sport_2_Description= ?, Sport_2_Status_Code= ?, Sport_2_Status_Description= ?, Sport_3= ?, Sport_3_Description= ?, Sport_3_Status_Code= ?, Sport_3_Status_Description= ?, Attribute_1_Code= ?, Attribute_1_Description= ?, Attribute_1_Effective_Term= ?, Attribute_2_Code= ?, Attribute_2_Description= ?, Attribute_2_Effective_Term= ?, Attribute_3_Code= ?, Attribute_3_Description= ?, Attribute_3_Effective_Term= ?, Attribute_4_Code= ?, Attribute_4_Description= ?, Attribute_4_Effective_Term= ?, Attribute_5_Code= ?, Attribute_5_Description= ?, Attribute_5_Effective_Term= ?, Cohort_1_Code= ?, Cohort_1_Description= ?, Cohort_1_Effective_Term= ?, Cohort_2_Code= ?, Cohort_2_Desription= ?, Cohort_2_Effective_Term= ?, Cohort_3_Code= ?, Cohort_3_description= ?, Cohort_3_Effective_Term= ?, Cohort_4_Code= ?, Cohort_4_Description= ?, Cohort_4_Effective_Term= ?, Cohort_5_Code= ?, Cohort_5_Description= ?, Cohort_5_Effective_Term= ?, Cohort_6_Code= ?, Cohot_6_Description= ?, Cohort_6_Effective_Term= ?, Cohort_7_Code= ?, Cohort_7_Description= ?, Cohort_7_Effective_Term= ?, Cohort_8_Code= ?, Cohort_8_Description= ?, Cohort_8_Effective_Term= ?, Cohort_9_Code= ?, Cohort_9_Description= ?, Cohort_Effective_Term= ?, Cohort_10_Code= ?, Cohort_10_Descroption= ?, Cohort_10_Effective_Term = ?  WHERE Student_Id = ?";
		
			$U = 1;
		
	
	   $query_Update = $this->_db->prepare($sqlUpdate);
	  $query_Update->bindParam($U++, $Term_Code);
	  $query_Update->bindParam($U++,$Name_Last);
	  $query_Update->bindParam($U++,$Name_First);
	  $query_Update->bindParam($U++,$Tu_Id);
	  $query_Update->bindParam($U++, $Name_Full);
	  $query_Update->bindParam($U++,$Name_Prefix);
	  $query_Update->bindParam($U++,$Name_Suffix);
	  $query_Update->bindParam($U++,$College);
	  $query_Update->bindParam($U++,$Student_Type_Code);
	  $query_Update->bindParam($U++,$Student_Status_Code);
	  $query_Update->bindParam($U++,$Education_Goal_Code);
	  $query_Update->bindParam($U++,$Education_Goal_Description);
	  $query_Update->bindParam($U++,$Expected_Graduation_Date);
	  $query_Update->bindParam($U++,$First_Semister_Attened);
	  $query_Update->bindParam($U++,$Last_Semister_Attened);
	  $query_Update->bindParam($U++,$Admissions_Term);
	  $query_Update->bindParam($U++, $Catalog_Term);
	  $query_Update->bindParam($U++, $Last_Term_Avalible);
	  $query_Update->bindParam($U++, $Hold_Indicator);
	  $query_Update->bindParam($U++, $Registration_Status_Code);
	  $query_Update->bindParam($U++, $Registration_Status_Description);
	  $query_Update->bindParam($U++,$Recidency_Code);
	  $query_Update->bindParam($U++,$Recidency_Description);
	  $query_Update->bindParam($U++,$Co_Op_Code1);
	  $query_Update->bindParam($U++,$Co_Op_Code2);
	  $query_Update->bindParam($U++,$Co_Op_Code3);
	  $query_Update->bindParam($U++,$Email_Type_Code);
	  $query_Update->bindParam($U++, $Email_Type_Address);
	  $query_Update->bindParam($U++, $Confidentiality_Indicator);
	  $query_Update->bindParam($U++, $Deceased_Indicator);
	  $query_Update->bindParam($U++,$Birth_Date);
	  $query_Update->bindParam($U++, $Gender);
	  $query_Update->bindParam($U++, $Hispanic_Indicator);
	  $query_Update->bindParam($U++, $Reported_Race);
	  $query_Update->bindParam($U++, $Race);
	  $query_Update->bindParam($U++, $International_Reported_race);
	  $query_Update->bindParam($U++, $Employee_Indicator);
	  $query_Update->bindParam($U++, $Veteran_Indicator);
	  $query_Update->bindParam($U++, $Marital_Status_Code);
	  $query_Update->bindParam($U++, $Religion_Code);
	  $query_Update->bindParam($U++, $Financial_Aid_Year);
	  $query_Update->bindParam($U++, $Financial_Aid_Application_Recieved_Date);
	  $query_Update->bindParam($U++, $Bill_Date);
	  $query_Update->bindParam($U++, $Bill_Due_Date);
	  $query_Update->bindParam($U++, $Payment_Status);
	  $query_Update->bindParam($U++, $Payment_Status_Date);
	  $query_Update->bindParam($U++, $Term_Balace);
	  $query_Update->bindParam($U++, $Total_Account_Balance);
	  $query_Update->bindParam($U++, $Address_Type_Code);
	  $query_Update->bindParam($U++, $Address_Type_Description);
	  $query_Update->bindParam($U++, $Address_Street_Line1);
	  $query_Update->bindParam($U++, $Address_Street_Line2);
	  $query_Update->bindParam($U++, $Address_City);
	  $query_Update->bindParam($U++, $Address_State_Code);
	  $query_Update->bindParam($U++, $Address_Zip);
	  $query_Update->bindParam($U++, $Address_County_Code);
	  $query_Update->bindParam($U++, $Address_County_Description);
	  $query_Update->bindParam($U++, $Address_nation_Code);
	  $query_Update->bindParam($U++, $Address_Nation_Description);
	  $query_Update->bindParam($U++, $Phone_Number);
	  $query_Update->bindParam($U++, $Phone_Extension);
	  $query_Update->bindParam($U++, $Associated_Campus_Ambler_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_Center_City_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_Fort_Washington_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_Harrisburg_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_HSC_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_Main_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_Online_Indicator);
	  $query_Update->bindParam($U++, $Hours_Attempted_UG);
	  $query_Update->bindParam($U++, $Hours_Passed_UG);
	  $query_Update->bindParam($U++, $GPA_Hours_UG);
	  $query_Update->bindParam($U++, $Grade_Points_UG);
	  $query_Update->bindParam($U++, $GPA_UG);
	  $query_Update->bindParam($U++, $Overall_passed_UG);
	  $query_Update->bindParam($U++, $Transfer_Hours_UG);
	  $query_Update->bindParam($U++, $Cumulative_Credits_UG);
	  $query_Update->bindParam($U++,$Cumulative_Quality_Points_UG);
	  $query_Update->bindParam($U++, $Graduate_Level_Code);
	  $query_Update->bindParam($U++, $Hours_Attempted_G);
	  $query_Update->bindParam($U++, $Hours_Passed_G);
	  $query_Update->bindParam($U++, $GPA_Hours_G);
	  $query_Update->bindParam($U++, $Grade_Points_G);
	  $query_Update->bindParam($U++, $GPA_G);
	  $query_Update->bindParam($U++,  $Overrall_Hours_Passed_G);
	  $query_Update->bindParam($U++,  $Transfer_Hours_G);
	  $query_Update->bindParam($U++,  $Cumulative_Credits_G);
	  $query_Update->bindParam($U++,  $Cumulative_Quality_Points_G);
	  $query_Update->bindParam($U++,  $Profrssional_Level_Code);
	  $query_Update->bindParam($U++,  $Hours_Attempted_P);
	  $query_Update->bindParam($U++,  $Hours_Passed_P);
	  $query_Update->bindParam($U++,  $GPA_Hours);
	  $query_Update->bindParam($U++,  $Grade_Points_P);
	  $query_Update->bindParam($U++,  $GPA_P);
	  $query_Update->bindParam($U++, $Overall_Hours_Passed_P);
	  $query_Update->bindParam($U++, $Transfer_Hours_P);
	  $query_Update->bindParam($U++, $Cumulative_Credits_P);
	  $query_Update->bindParam($U++, $cumulative_Quality_Points);
	  $query_Update->bindParam($U++,  $Continuing_Education_Level_Code);
	  $query_Update->bindParam($U++,  $Hours_Attempted_CE);
	  $query_Update->bindParam($U++,$Hours_Passed_CE);
	  $query_Update->bindParam($U++, $GPA_Hours_CE);
	  $query_Update->bindParam($U++, $Grades_Points_CE);
	  $query_Update->bindParam($U++, $GPA_CE);
	  $query_Update->bindParam($U++, $Overall_Hours_Passed_CE);
	  $query_Update->bindParam($U++, $Transfer_Hours_Passed);
	  $query_Update->bindParam($U++, $Cumulative_Credits_CE);
	  $query_Update->bindParam($U++, $Cumulative_Qulity_Points_CE);
	  $query_Update->bindParam($U++, $REgistration_Status_Date);
	  $query_Update->bindParam($U++, $Registration_Change_Date);
	  $query_Update->bindParam($U++, $CAlculated_Campus_Code);
	  $query_Update->bindParam($U++, $Calculated_Campus_Description);
	  $query_Update->bindParam($U++, $Campus_Of_Record);
	  $query_Update->bindParam($U++, $Campus_Of_Record_Description);
	  $query_Update->bindParam($U++, $Hours_Registerd);
	  $query_Update->bindParam($U++, $Initial_Registration_Date);
	  $query_Update->bindParam($U++, $Time_Status_Code);
	  $query_Update->bindParam($U++, $Time_Status_Date);
	  $query_Update->bindParam($U++,  $Maximum_Hours_Allowed);
	  $query_Update->bindParam($U++,  $College_1_Description);
	  $query_Update->bindParam($U++, $Program_1);
	  $query_Update->bindParam($U++, $Level_1_Code);
	  $query_Update->bindParam($U++, $Level_1_Description);
	  $query_Update->bindParam($U++, $Class_1_Code);
	  $query_Update->bindParam($U++, $Class_1_description);
	  $query_Update->bindParam($U++, $Degree_1_Code);
	  $query_Update->bindParam($U++, $Degree_1_Description);
	  $query_Update->bindParam($U++, $Curriculum1_1);
	  $query_Update->bindParam($U++, $Curriculum1_1_Description);
	  $query_Update->bindParam($U++, $Curriculum1_2);
	  $query_Update->bindParam($U++, $Curriculum1_2_Description);
	  $query_Update->bindParam($U++, $Concentration_1_1);
	  $query_Update->bindParam($U++, $Concentration_1_1_Descripton);
	  $query_Update->bindParam($U++, $Concentration_1_2);
	  $query_Update->bindParam($U++, $Concentration1_2_Description);
	  $query_Update->bindParam($U++,$Minor1_1);
	  $query_Update->bindParam($U++, $Minor1_1_Description);
	  $query_Update->bindParam($U++,  $Minor1_2);
	  $query_Update->bindParam($U++, $Minor1_2_Description);
	  $query_Update->bindParam($U++, $College_2_Code);
	  $query_Update->bindParam($U++, $College_2_Description);
	  $query_Update->bindParam($U++,  $Program_2);
	  $query_Update->bindParam($U++,  $Level_2_Code);
	  $query_Update->bindParam($U++,  $Level_2_Description);
	  $query_Update->bindParam($U++,  $Class_2_Code);
	  $query_Update->bindParam($U++,  $Class_2_Description);
	  $query_Update->bindParam($U++, $Degree_2_Code);
	  $query_Update->bindParam($U++, $Degree_2_Description);
	  $query_Update->bindParam($U++, $Curriculum_2_1);
	  $query_Update->bindParam($U++, $Curriculum_2_1_Description);
	  $query_Update->bindParam($U++, $Curriculum_2_2);
	  $query_Update->bindParam($U++, $Curriculum_2_2_Description);
	  $query_Update->bindParam($U++, $Concentration_2_1);
	  $query_Update->bindParam($U++, $Concentraction_2_1_Description);
	  $query_Update->bindParam($U++, $Concentration_2_2);
	  $query_Update->bindParam($U++, $Concentration_2_2_Description);
	  $query_Update->bindParam($U++, $Visa_Type_Code);
	  $query_Update->bindParam($U++, $Visa_Type_Description);
	  $query_Update->bindParam($U++, $VIsa_No);
	  $query_Update->bindParam($U++, $Visa_Start_Date);
	  $query_Update->bindParam($U++, $Visa_Expiration_Date);
	  $query_Update->bindParam($U++, $Citizenship_Indicator);
	  $query_Update->bindParam($U++, $Citizenship_Decription);
	  $query_Update->bindParam($U++,$Activity_1_Code);
	  $query_Update->bindParam($U++, $Activity_1_Description);
	  $query_Update->bindParam($U++, $Activity_2_Code);
	  $query_Update->bindParam($U++, $Activity_2_Description);
	  $query_Update->bindParam($U++, $Sport_1);
	  $query_Update->bindParam($U++, $Sport_1_Description);
	  $query_Update->bindParam($U++, $Sport_1_Status_Code);
	  $query_Update->bindParam($U++, $Sport_1_Status_Description);
	  $query_Update->bindParam($U++, $Sport_2);
	  $query_Update->bindParam($U++, $Sport_2_Description);
	  $query_Update->bindParam($U++, $Sport_2_Status_Code);
	  $query_Update->bindParam($U++, $Sport_2_Status_Description);
	  $query_Update->bindParam($U++, $Sport_3);
	  $query_Update->bindParam($U++, $Sport_3_Description);
	  $query_Update->bindParam($U++, $Sport_3_Status_Code);
	  $query_Update->bindParam($U++, $Sport_3_Status_Description);
	  $query_Update->bindParam($U++, $Attribute_1_Code);
	  $query_Update->bindParam($U++, $Attribute_1_Description);
	  $query_Update->bindParam($U++, $Attribute_1_Effective_Term);
	  $query_Update->bindParam($U++, $Attribute_2_Code);
	  $query_Update->bindParam($U++, $Attribute_2_Description);
	  $query_Update->bindParam($U++, $Attribute_2_Effective_Term);
	  $query_Update->bindParam($U++, $Attribute_3_Code);
	  $query_Update->bindParam($U++, $Attribute_3_Description);
	  $query_Update->bindParam($U++, $Attribute_3_Effective_Term);
	  $query_Update->bindParam($U++, $Attribute_4_Code);
	  $query_Update->bindParam($U++, $Attribute_4_Description);
	  $query_Update->bindParam($U++, $Attribute_4_Effective_Term);
	  $query_Update->bindParam($U++,$Attribute_5_Code);
	  $query_Update->bindParam($U++,$Attribute_5_Description);
	  $query_Update->bindParam($U++, $Attribute_5_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_1_Code);
	  $query_Update->bindParam($U++,$Cohort_1_Description);
	  $query_Update->bindParam($U++, $Cohort_1_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_2_Code);
	  $query_Update->bindParam($U++, $Cohort_2_Desription);
	  $query_Update->bindParam($U++, $Cohort_2_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_3_Code);
	  $query_Update->bindParam($U++,$Cohort_3_description);
	  $query_Update->bindParam($U++, $Cohort_3_Effective_Term);
	  $query_Update->bindParam($U++, $Cohort_4_Code);
	  $query_Update->bindParam($U++,$Cohort_4_Description);
	  $query_Update->bindParam($U++,$Cohort_4_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_5_Code);
	  $query_Update->bindParam($U++,$Cohort_5_Description);
	  $query_Update->bindParam($U++,$Cohort_5_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_6_Code);
	  $query_Update->bindParam($U++,$Cohot_6_Description);
	  $query_Update->bindParam($U++,$Cohort_6_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_7_Code);
	  $query_Update->bindParam($U++,$Cohort_7_Description);
	  $query_Update->bindParam($U++,$Cohort_7_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_8_Code);
	  $query_Update->bindParam($U++,$Cohort_8_Description);
	  $query_Update->bindParam($U++,$Cohort_8_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_9_Code);
	  $query_Update->bindParam($U++,$Cohort_9_Description);
	  $query_Update->bindParam($U++,$Cohort_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_10_Code);
	  $query_Update->bindParam($U++,$Cohort_10_Descroption);
	  $query_Update->bindParam($U++,$Cohort_10_Effective_Term);
      $query_Update->bindParam($U++,$Student_Id);
	  
	  
	  $query_Update->execute();
				
			$U = 0;	
		
		}
		
		
		
		
		

	public function get_Students()
			{
				
				$query_getUser = $this->_db->prepare("SELECT * FROM STUDENT");
				$query_getUser->execute();
				
				$resultStudent = array();
				$i=0;  
				  if($query_getUser->rowCount() != 0){
					
						while($result_Students = $query_getUser->fetch(PDO::FETCH_ASSOC)){
					
					
					$Student_Id 						= (isset($result_Students['Student_Id']) ? $result_Students['Student_Id'] : null);
					$Name_Last			 				= (isset($result_Students['Name_Last']) ? $result_Students['Name_Last'] : null);
					$Name_First 						= (isset($result_Students['Name_First']) ? $result_Students['Name_First'] : null);
					$Tu_Id 								= (isset($result_Students['Tu_Id']) ? $result_Students['Tu_Id'] : null);
					$Expected_Graduation_Date 		= (isset($result_Students['Expected_Graduation_Date']) ? $result_Students['Expected_Graduation_Date'] : null);
					$Email_Type_Address 				= (isset($result_Students['Email_Type_Address']) ? $result_Students['Email_Type_Address'] : null);
					$Gender 							= (isset($result_Students['Gender']) ? $result_Students['Gender'] : null);
					$Address_Street_Line1 			= (isset($result_Students['Address_Street_Line1']) ? $result_Students['Address_Street_Line1'] : null);
					$Address_City 						= (isset($result_Students['Address_City']) ? $result_Students['Address_City'] : null);
					$Address_Zip 						= (isset($result_Students['Address_Zip']) ? $result_Students['Address_Zip'] : null);	
					$Phone_Number				 		= (isset($result_Students['Phone_Number']) ? $result_Students['Phone_Number'] : null);
					$Hours_Attempted_UG 				= (isset($result_Students['Hours_Attempted_UG']) ? $result_Students['Hours_Attempted_UG'] : null);	
					$GPA_Hours_UG 						= (isset($result_Students['GPA_Hours_UG']) ? $result_Students['GPA_Hours_UG'] : null);
					$Grade_Points_UG 					= (isset($result_Students['Grade_Points_UG']) ? $result_Students['Grade_Points_UG'] : null);
					$GPA_UG 							= (isset($result_Students['GPA_UG']) ? $result_Students['GPA_UG'] : null);
					$Overall_passed_UG 				= (isset($result_Students['Overall_passed_UG']) ? $result_Students['Overall_passed_UG'] : null);
					$Transfer_Hours_UG 				= (isset($result_Students['Transfer_Hours_UG']) ? $result_Students['Transfer_Hours_UG'] : null);
					$Cumulative_Credits_UG 			= (isset($result_Students['Cumulative_Credits_UG']) ? $result_Students['Cumulative_Credits_UG'] : null);
					$Cumulative_Quality_Points_UG 	= (isset($result_Students['Cumulative_Quality_Points_UG']) ? $result_Students['Cumulative_Quality_Points_UG'] : null);
					$Hours_Attempted_G 				= (isset($result_Students['Hours_Attempted_G']) ? $result_Students['Hours_Attempted_G'] : null);
					$Hours_Passed_G 					= (isset($result_Students['Hours_Passed_G']) ? $result_Students['Hours_Passed_G'] : null);
					$GPA_Hours_G						= (isset($result_Students['GPA_Hours_G']) ? $result_Students['GPA_Hours_G'] : null);
					$Grade_Points_G 					= (isset($result_Students['Grade_Points_G']) ? $result_Students['Grade_Points_G'] : null);
					$GPA_G 								= (isset($result_Students['GPA_G']) ? $result_Students['GPA_G'] : null);
					$Overral_Hours_Passed_G 	= (isset($result_Students['Overral_Hours_Passed_G']) ? $result_Students['Overral_Hours_Passed_G'] : null);-
								
									$Transfer_Hours_G 					= (isset($result_Students['Transfer_Hours_G']) ? $result_Students['Transfer_Hours_G'] : null);
									$Cumulative_Credits_G 			= (isset($result_Students['Cumulative_Credits_G']) ? $result_Students['Cumulative_Credits_G'] : null);
									$Cumulative_Quality_Points_G 	= (isset($result_Students['Cumulative_Quality_Points_G']) ? $result_Students['Cumulative_Quality_Points_G'] : null);
									$Registration_Status_Date 		= (isset($result_Students['Registration_Status_Date']) ? $result_Students['Registration_Status_Date'] : null);
									$Hours_Registerd 					= (isset($result_Students['Hours_Registerd']) ? $result_Students['Hours_Registerd'] : null);
									$College_1_Description 			= (isset($result_Students['Registration_Status_Date']) ? $result_Students['Registration_Status_Date'] : null);
									$Program_1							= (isset($result_Students['Program_1']) ? $result_Students['Program_1'] : null);
								
						
					
					
					
					
					
							$resultStudent['Student_Id'][$i]							=	utf8_encode($Student_Id); 
							$resultStudent['Name_Last'][$i]							=	utf8_encode($Name_Last); 
							$resultStudent['Name_First'][$i]							=	utf8_encode($Name_First); 
							$resultStudent['Tu_Id'][$i]								=	utf8_encode($Tu_Id); 
							$resultStudent['Expected_Graduation_Date'][$i]	 		=	utf8_encode($Expected_Graduation_Date); 
							$resultStudent['Email_Type_Address']	[$i]				=	utf8_encode($Email_Type_Address); 
							$resultStudent['Gender'][$i]								=	utf8_encode($Gender); 
							$resultStudent['Address_Street_Line1'][$i]				=	utf8_encode($Address_Street_Line1); 
							$resultStudent['Address_City'][$i]						=	utf8_encode($Address_City); 
							$resultStudent['Address_Zip']	[$i]						=	utf8_encode($Address_Zip); 
							$resultStudent['Phone_Number'][$i]						=	utf8_encode($Phone_Number); 
							$resultStudent['Hours_Attempted_UG']	[$i]				=	utf8_encode($Hours_Attempted_UG); 
							$resultStudent['GPA_Hours_UG'][$i]						=	utf8_encode($GPA_Hours_UG); 
							$resultStudent['Grade_Points_UG'][$i]					=	utf8_encode($Grade_Points_UG); 
							$resultStudent['GPA_UG'][$i]								=	utf8_encode($GPA_UG); 
							$resultStudent['Overall_passed_UG'][$i]					=	utf8_encode($Overall_passed_UG); 
							$resultStudent['Transfer_Hours_UG'][$i]					=	utf8_encode($Transfer_Hours_UG); 
							$resultStudent['Cumulative_Credits_UG'][$i]				=	utf8_encode($Cumulative_Credits_UG); 
							$resultStudent['Cumulative_Quality_Points_UG'][$i]		=	utf8_encode($Cumulative_Quality_Points_UG); 
							$resultStudent['Hours_Attempted_G'][$i]					=	utf8_encode($Hours_Attempted_G); 
							$resultStudent['Hours_Passed_G'][$i]						=	utf8_encode($Hours_Passed_G); 
							$resultStudent['GPA_Hours_G']	[$i]						=	utf8_encode($GPA_Hours_G); 
							$resultStudent['Grade_Points_G'][$i]						=	utf8_encode($Grade_Points_G); 
							$resultStudent['GPA_G'][$i]								=	utf8_encode($GPA_G); 
							$resultStudent['Overral_Hours_Passed_G'][$i]			=	utf8_encode($Overral_Hours_Passed_G); 
							$resultStudent['Transfer_Hours_G'][$i]					=	utf8_encode($Transfer_Hours_G); 
							$resultStudent['Cumulative_Credits_G	'][$i]			    =	utf8_encode($Cumulative_Credits_G); 
							$resultStudent['Cumulative_Quality_Points_G'][$i]		=	utf8_encode($Cumulative_Quality_Points_G); 
							$resultStudent['Registration_Status_Date'][$i]			=	utf8_encode($Registration_Status_Date); 
							$resultStudent['Hours_Registerd'][$i]					=	utf8_encode($Hours_Registerd); 
							$resultStudent['College_1_Description'][$i]				=	utf8_encode($College_1_Description); 
							$resultStudent['Program_1'][$i]							=	utf8_encode($Program_1); 
							
							$i++;
						
					} //end while loop
						
						return $resultStudent;
				  }else{
					  
					  return 0;
					  }
				
			
				
			}  // end function get_User_Info_by_Email($Email);


	
	
	
	
} // End of my Users Class


