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
        echo 'Your Name is ' . $this->name . '<br>' . 'Your Age is ' . $this->age;  // 이름과 나이 출력
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
        echo "Name : " . $this->name . '<br>' . "Age : " . $this->age . '<br>' . "Job : " . $this->skill;  // 이름, 나이, 기술 출력
    }
}

// Engineer 클래스의 인스턴스 생성
$engineer = new Engineer("JIN" , 25, "NEW ENJ");  // Engineer 클래스의 인스턴스 생성

// Engineer 정보 출력
$engineer->introduce();  // Engineer 정보 출력
/*

Employee 클래스와 Engineer 클래스를 정의하고, 이를 사용하여 엔지니어 정보를 출력

Employee 클래스는 이름(name)과 나이(age)라는 두 개의 private 프로퍼티를 가지며, __construct, __set, __get, introduce 메서드를 정의
Engineer 클래스는 Employee 클래스를 상속받습니다. 추가적으로 skill이라는 protected 프로퍼티를 가지고, __construct과 introduce 메서드를 재정의
Engineer 클래스의 인스턴스를 생성한 후 introduce 메서드를 호출하여 엔지니어의 정보를 출력

*/
?>
