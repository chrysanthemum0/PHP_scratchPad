<?php

// 직원(Employee) 클래스 정의
class Employee
{
    // 프로퍼티(속성) 선언
    private $name; // 이름
    private $age;  // 나이

    // 생성자 메서드: 객체 생성 시 초기화
    public function __construct($name, $age)
    {
        // __set 매직 메서드 호출로 프로퍼티 값 설정
        $this->__set('name', $name); // 이름 설정
        $this->__set('age', $age);   // 나이 설정
    }

    // __set 매직 메서드: 프로퍼티 값을 설정하는 메서드 
    public function __set($var, $value) // set 메서드의 매개변수
    {
        // 동적 프로퍼티 설정
        $this->{$var} = $value;  // 동적 프로퍼티 설정
    }

    // __get 매직 메서드: 프로퍼티 값을 가져오는 메서드
    public function __get($var)
    {
        // 동적 프로퍼티 반환
        return $this->{$var};  // 동적 프로퍼티 반환
    }

    // introduce 메서드: 직원 정보 출력
    public function introduce()
    {
        // 이름과 나이 출력
        echo "Name : " . $this->name . " Age : " . $this->age . " Job : " . '<br>';  // 이름과 나이 출력
    }  
}

// Engineer 클래스 정의
class Engineer extends Employee
{
    protected $skill;  // 보호된 프로퍼티(속성) 선언

    // 생성자 메서드: 객체 생성 시 초기화
    public function __construct($name, $age, $skill)
    {
        // 부모 클래스(Employee)의 생성자 호출
        parent::__construct($name, $age);  // 부모 클래스(Employee)의 생성자 호출

        // __set 매직 메서드 호출로 프로퍼티 값 설정
        $this->__set('skill', $skill);  // 기술 설정
    }

    // introduce 메서드: 엔지니어 정보 출력
    public function introduce()
    {
        // 이름, 나이, 기술(Job) 출력
        echo "Name : " . $this->name . "Age : " . $this->age . "Job : " . $this->skill . '<br>';
    }
}

// 직원과 엔지니어 객체 생성 및 배열에 저장
$workers = [];
$workers[] = new Engineer("JIN", 25, "NEW ENJ");
$workers[] = new Employee("AYAKA", 25);
$workers[] = new Employee("TAMAKI", 30);

// 배열의 각 객체의 introduce 메서드 호출
foreach ($workers as $value) {
    $value->introduce();
}


/*

1.Employee 클래스는 이름($name)과 나이($age)라는 두 개의 private 프로퍼티를 가짐
2.Engineer 클래스는 Employee 클래스를 상속받아 protected 프로퍼티 skill을 추가
3.__construct 메서드는 객체 생성할 때 초기화 작업
4.__set 메서드는 동적으로 프로퍼티 값을 설정
5.__get 메서드는 동적으로 프로퍼티 값을 반환
6.introduce 메서드는 객체의 정보를 출력
7.$workers 배열에 Engineer와 Employee 객체를 저장하고, foreach 문을 사용하여 각 객체의 introduce 메서드를 호출하여 정보를 출력합니다.

*/
?>
