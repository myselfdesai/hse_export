<?php
ini_set('display_errors', 1);
use SPSS\Sav\Variable;

#Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=HSE", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


$sql = 'SELECT s.question_id, s.answer_id, a.answer_id, a.hse_answer_code, a.answer_answer FROM `hse_survey_question_answer` s LEFT JOIN answers a ON s.answer_id = a.answer_id ORDER BY `id` ASC';
$query = $conn->prepare($sql);
$query->execute();
$result = $query->fetchAll();

$sex = array();
$age = array();
$ethnic_group = array();
$qualification = array();
$county = array();
$staff_category = array();
$professional_qualification = array();
$current_profession_yrs = array();
$employment_length = array();
$vic1 = array();
$vic2 = array();
$vic3 = array();
$vic4 = array();
$vic5 = array();
$vic6 = array();
$vic7 = array();
$vic8 = array();
$vic9 = array();
$emp1 = array();
$emp2 = array();
$emp3 = array();
$emp4 = array();
$emp5 = array();
$emp6 = array();
$emp7 = array();
$emp8 = array();
$emp9 = array();
$emp10 = array();
$emp11 = array();
$emp12 = array();
$emp13 = array();
$emp14 = array();
$emp15 = array();
$emp16 = array();
$emp17 = array();
$emp18 = array();
$emp19 = array();
$emp20 = array();
$emp21 = array();
$byst1 = array();
$byst2 = array();
$byst3 = array();
$byst4 = array();
$cyb1 = array();
$cyb2 = array();
$cyb3 = array();
$bul1 = array();
$bul2 = array();
$bul3 = array();
$tosca1a = array();
$tosca1b = array();
$tosca1c = array();
$tosca2a = array();
$tosca2b = array();
$tosca2c = array();
$tosca3a = array();
$tosca3b = array();
$tosca3c = array();
$tosca4a = array();
$tosca4b = array();
$tosca4c = array();
$lead1 = array();
$lead2 = array();

foreach ($result as $key => $value) {

    switch($value['question_id']){
        case (int) 1:
            $sex[] = $value['answer_answer'];
            break;
        case (int) 2:
            $age[] = $value['answer_answer'];
            break;
        case (int) 4:
            $ethnic_group[] = $value['hse_answer_code'];
            break;
        case (int) 5:
            $qualification[] = $value['hse_answer_code'];
            break;
        case (int) 6:
            $county[] = $value['hse_answer_code']; #In which county do you work now?
            break;
        case (int) 7:
            $staff_category[] = $value['hse_answer_code'];
            break;
        case (int) 8:
            $professional_qualification[] = $value['hse_answer_code'];
            break;
        case (int) 9:
            $current_profession_yrs[] = $value['hse_answer_code'];
            break;
        case (int) 10:
            $employment_length[] = $value['hse_answer_code'];
            break;
        #WORK-RELATED EXPERIENCES AND EMPATHY SECTION. Set of 9 items starting with: "Someone withholding information which affects your performance"
        case (int) 21:
            $vic1[] = $value['hse_answer_code'];    #Someone withholding information which affects your performance
            break;
        case (int) 22:
            $vic2[] = $value['hse_answer_code'];    #Spreading gossip and rumours about you
            break;
        case (int) 23:
            $vic3[] = $value['hse_answer_code'];    #Being ignored or excluded
            break;
        case (int) 24:
            $vic4[] = $value['hse_answer_code'];    #Having insulting or offensive remarks made about your person, attitudes or your private life
            break;
        case (int) 25:
            $vic5[] = $value['hse_answer_code'];    #Being shouted at or being the target of spontaneous rage
            break;
        case (int) 26:
            $vic6[] = $value['hse_answer_code'];    #Repeated reminders of your errors or mistakes
            break;
        case (int) 27:
            $vic7[] = $value['hse_answer_code'];    #Being ignored or facing a hostile reaction when you approach
            break;
        case (int) 28:
            $vic8[] = $value['hse_answer_code'];    #Persistent criticism of your work and effort
            break;
        case (int) 29:
            $vic9[] = $value['hse_answer_code'];    #Practical jokes carried out by people you don′t get along with
            break;

        # 21 Items assessing empathy, starting with: "I often have concerned feelings for people less fortunate than me "
        case (int) 35:
            $emp1[] = $value['hse_answer_code'];    #I often have concerned feelings for people less fortunate than me
            break;
        case (int) 36:
            $emp2[] = $value['hse_answer_code'];    #I sometimes find it difficult to see things from the 'other people's' point of view
            break;
        case (int) 37:
            $emp3[] = $value['hse_answer_code'];    #Sometimes I don't feel very sorry for other people when they are having problems
            break;
        case (int) 38:
            $emp4[] = $value['hse_answer_code'];    #In emergency situations, I feel apprehensive and ill-at-ease.                   
            break;
        case (int) 39:
            $emp5[] = $value['hse_answer_code'];    #I try to look at everybody's side of a disagreement before I make a decision
            break;
        case (int) 40:
            $emp6[] = $value['hse_answer_code'];    #When I see someone being taken advantage of, I feel kind of protective towards them
            break;
        case (int) 41:
            $emp7[] = $value['hse_answer_code'];    #I sometimes feel helplessness when I am in the middle of a very emotional situation
            break;
        case (int) 42:
            $emp8[] = $value['hse_answer_code'];    #I sometimes try to understand my friends better by imagining how things look from their perspective
            break;
        case (int) 43:
            $emp9[] = $value['hse_answer_code'];    #When I see someone get hurt, I tend to remain calm
            break;
        case (int) 44:
            $emp10[] = $value['hse_answer_code'];    #Other people's misfortunes do not usually disturb me a great deal
            break;
        case (int) 45:
            $emp11[] = $value['hse_answer_code'];    #If I'm sure I'm right about something, I don't waste much time listening to other people's arguments
            break;
        case (int) 46:
            $emp12[] = $value['hse_answer_code'];    #Being in a tense emotional situation scares me
            break;
        case (int) 47:
            $emp13[] = $value['hse_answer_code'];    #When I see someone being treated unfairly, I sometimes don't feel very much pity for them   
            break;
        case (int) 48:
            $emp14[] = $value['hse_answer_code'];    #I am usually pretty effective in dealing with emergencies
            break;
        case (int) 49:
            $emp15[] = $value['hse_answer_code'];    #I am often quite touched by things that I see happen
            break;
        case (int) 50:
            $emp16[] = $value['hse_answer_code'];    #I believe that there are two sides to every question and try to look at them both
            break;
        case (int) 51:
            $emp17[] = $value['hse_answer_code'];    #I would describe myself as a pretty soft-hearted person
            break;
        case (int) 52:
            $emp18[] = $value['hse_answer_code'];    #I tend to lose control during emergencies
            break;
        case (int) 53:
            $emp19[] = $value['hse_answer_code'];    #When I am upset at someone, I try to “put myself in his/her shoes” for a while
            break;
        case (int) 54:
            $emp20[] = $value['hse_answer_code'];    #When I see someone who badly needs help in an emergency, I go to pieces
            break;
        case (int) 55:
            $emp21[] = $value['hse_answer_code'];    #Before criticizing somebody, I try to imagine how I would feel if I were in their place
            break;

        #4 Items assessing passive bystanding behaviour (how often have you observed the following things at work?), starting with: "Someone at work being excluded or ignored".
        case (int) 56:
            $byst1[] = $value['hse_answer_code'];   #Someone at work being excluded or ignored.
            break;
        case (int) 57:
            $byst2[] = $value['hse_answer_code'];   #Someone at work being threatened, insulted or offended.
            break;
        case (int) 58:
            $byst3[] = $value['hse_answer_code'];   #Gossip and rumours being spread about someone at work.
            break;
        case (int) 59:
            $byst4[] = $value['hse_answer_code'];   #Someone at work being shouted at or being the target of spontaneous rage.
            break;
        
        #YOUR WORK-RELATED EXPERIENCES AND FEELINGS SECTION.  3 Items assessing cyberbullying, starting with: "Your emails, phone calls or messages are ignored at work"
        case (int) 60:
            $cyb1[] = $value['hse_answer_code'];  #Your emails, phone calls or messages are ignored at work.
            break;
        case (int) 61:
            $cyb2[] = $value['hse_answer_code'];  #Rumours or gossips are being spread about you by means of ICT.  
            break;
        case (int) 62:
            $cyb3[] = $value['hse_answer_code'];  #Your personal information is hacked and used to harm you.
            break;
        
        #3 Items assessing bullying (During the last six months, how often have you…) starting with: "Threatened, insulted or offended someone at work". 
        case (int) 63:
            $bul1[] = $value['hse_answer_code'];    #Threatened, insulted or offended someone at work.
            break;
        case (int) 64:
            $bul2[] = $value['hse_answer_code'];    #Humiliated or ridiculed someone in connection with their work.
            break;
        case (int) 65:
            $bul3[] = $value['hse_answer_code'];    #Excluded or ignored someone at work.
            break;

        #4 Items, each including 3 options assessing shame, guilt and externalisation of blame, starting with: "You break something at work and then hide it".
        case (int) 66:
            $tosca1a[] = $value['hse_answer_code']; #You would think: “This is making me anxious. I need to either fix it or get someone else to”.
            break;
        case (int) 67:
            $tosca1b[] = $value['hse_answer_code']; #You would think about quitting
            break;
        case (int) 68:
            $tosca1c[] = $value['hse_answer_code']; #You would think: “A lot of things are not made very well these days”
            break;


        case (int) 69:
            $tosca2a[] = $value['hse_answer_code']; #You would feel incompetent
            break;
        case (int) 70:
            $tosca2b[] = $value['hse_answer_code']; #You would think: “There are never enough hours in the day”
            break;
        case (int) 71:
            $tosca2c[] = $value['hse_answer_code']; #You would feel: “I deserve to be reprimanded for mismanaging the project”
            break;


        case (int) 72:
            $tosca3a[] = $value['hse_answer_code']; #You would think the company did not like the co-worker
            break;
        case (int) 73:
            $tosca3b[] = $value['hse_answer_code']; #You would keep quiet and avoid the co-worker
            break;
        case (int) 74:
            $tosca3c[] = $value['hse_answer_code']; #You would feel unhappy and eager to correct the situation 
            break;

        case (int) 75:
            $tosca4a[] = $value['hse_answer_code']; #You would think your boss should have been more clear about what was expected of you 
            break;
        case (int) 76:
            $tosca4b[] = $value['hse_answer_code']; #You would feel as though you want to hide
            break;
        case (int) 77:
            $tosca4c[] = $value['hse_answer_code']; #You would think 'I should have recognized the problem and do a better job'
            break;
        
        case (int) 78:
            $lead1[] = $value['hse_answer_code'];   #If needed, can you get support and help with your work from your immediate superior?
            break;
        case (int) 79:
            $lead2[] = $value['hse_answer_code'];   #If needed, is your immediate superior willing to listen to your work-related problems?
            break;

        
    }
}



require __DIR__ . '/../vendor/autoload.php';
$file = __DIR__ . '/data.sav';
$writer = new \SPSS\Sav\Writer([
        'header' => [
                'prodName'     => '@(#) HSE SPSS FILE',
                'layoutCode'   => 2,
                'compression'  => 1,
                'weightIndex'  => 0,
                'bias'         => 100,
                'creationDate' => date("Y-m-d"),
                'creationTime' => date("h:i:sa"),
        ],
        'variables' => [
            [
                    'name'     => 'SEX',
                    'width'    => 66,
                    'columns'  => 50,
                    'align'    => 3,
                    'measure'  => 1,
                    'data'     => $sex,
            ],
            [
                    'name'     => 'AGE',
                    'width'    => 5,
                    'columns'  => 5,
                    'align'    => 3,
                    'measure'  => 1,
                    'data'     => $age,
            ],
            [
                    'name'     => 'ETHNICGROUP',
                    'label'    => 'ETHNIC GROUP',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $ethnic_group,
            ],
            [
                    'name'     => 'QUALIFICATION',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $qualification,
            ],
            [
                    'name'     => 'COUNTY',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 3,
                    'data'     => $county,
            ],
            [
                    'name'     => 'STAFFCATEGORY',
                    'label'    => 'STAFF CATEGORY',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $staff_category,
            ],
            [
                    'name'     => 'PROFESSIONALQUALIFICATION',
                    'label'    => 'PROFESSIONAL QUALIFICATION',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $professional_qualification,
            ],
            [
                    'name'     => 'CURRENTPROFESSIONYRS',
                    'label'    => 'CURRENT PROFESSION YRS',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $current_profession_yrs,
            ],
            [
                    'name'     => 'EMPLOYEMENTLENGTH',
                    'label'    => 'EMPLOYEMENT LENGTH',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $employment_length,
            ],
            [
                    'name'     => 'Vic1',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $vic1,
            ],
            [
                    'name'     => 'Vic2',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $vic2,
            ],
            [
                    'name'     => 'Vic3',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $vic3,
            ],
            [
                    'name'     => 'Vic4',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $vic4,
            ],
            [
                    'name'     => 'Vic5',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $vic5,
            ],
            [
                    'name'     => 'Vic6',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $vic6,
            ],
            [
                    'name'     => 'Vic7',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $vic7,
            ],
            [
                    'name'     => 'Vic8',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $vic8,
            ],
            [
                    'name'     => 'Vic9',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $vic9,
            ],
            [
                    'name'     => 'emp1',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp1,
            ],
            [
                    'name'     => 'emp2',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp2,
            ],
            [
                    'name'     => 'emp3',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp3,
            ],
            [
                    'name'     => 'emp4',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp4,
            ],
            [
                    'name'     => 'emp5',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp5,
            ],
            [
                    'name'     => 'emp6',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp6,
            ],
            [
                    'name'     => 'emp7',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp7,
            ],
            [
                    'name'     => 'emp8',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp8,
            ],
            [
                    'name'     => 'emp9',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp9,
            ],
            [
                    'name'     => 'emp10',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp10,
            ],
            [
                    'name'     => 'emp11',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp11,
            ],
            [
                    'name'     => 'emp12',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp12,
            ],
            [
                    'name'     => 'emp13',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp13,
            ],
            [
                    'name'     => 'emp14',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp14,
            ],
            [
                    'name'     => 'emp15',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp15,
            ],
            [
                    'name'     => 'emp16',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp16,
            ],
            [
                    'name'     => 'emp17',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp17,
            ],
            [
                    'name'     => 'emp18',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp18,
            ],
            [
                    'name'     => 'emp19',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp19,
            ],
            [
                    'name'     => 'emp20',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp20
            ],
            [
                    'name'     => 'emp21',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $emp21,
            ],
            [
                    'name'     => 'Byst1',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $byst1,
            ],
            [
                    'name'     => 'Byst2',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $byst2,
            ],
            [
                    'name'     => 'Byst3',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $byst3,
            ],
            [
                    'name'     => 'Byst4',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $byst4,
            ],
            [
                    'name'     => 'Cyb1',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $cyb1,
            ],
            [
                    'name'     => 'Cyb2',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $cyb2,
            ],
            [
                    'name'     => 'Cyb3',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $cyb3,
            ],
            [
                    'name'     => 'Bul1',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $bul1,
            ],
            [
                    'name'     => 'Bul2',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $bul2,
            ],
            [
                    'name'     => 'Bul3',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $bul3,
            ],
            [
                    'name'     => 'Tosca1a',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca1a,
            ],
            [
                    'name'     => 'Tosca1b',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca1b,
            ],
            [
                    'name'     => 'Tosca1c',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca1c,
            ],
            [
                    'name'     => 'Tosca2a',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca2a,
            ],
            [
                    'name'     => 'Tosca2b',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca2b,
            ],
            [
                    'name'     => 'Tosca2c',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca2c,
            ],
            [
                    'name'     => 'Tosca3a',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca3a,
            ],
            [
                    'name'     => 'Tosca3b',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca3b,
            ],
            [
                    'name'     => 'Tosca3c',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca3c,
            ],
            [
                    'name'     => 'Tosca4a',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca4a,
            ],
            [
                    'name'     => 'Tosca4b',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca4b,
            ],
            [
                    'name'     => 'Tosca4c',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $tosca4c,
            ],
            [
                    'name'     => 'Lead1',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $lead1,
            ],
            [
                    'name'     => 'Lead2',
                    'width'    => 0,
                    'decimals' => 0,
                    'format'   => 5,
                    'columns'  => 11,
                    'align'    => 1,
                    'measure'  => 1,
                    'data'     => $lead2,
            ],
            
            
        ],
    ]);
$writer->save($file);