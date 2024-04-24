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
        $this->__set('name', $name);
        $this->__set('age', $age);
    }

    // __set 매직 메서드: 프로퍼티 값을 설정하는 메서드 
    public function __set($var, $value) // set 메서드의 메개변수 
    { //$var에 name과 age가 들어감
        // 동적 프로퍼티 설정
        $this->{$var} = $value;
    }

    // __get 매직 메서드: 프로퍼티 값을 가져오는 메서드
    public function __get($var)
    {
        // 동적 프로퍼티 반환
        return $this->{$var};
    }

    // introduce 메서드: 직원 정보 출력
    public function introduce()
    {
        // 이름과 나이 출력
        echo 'Your Name is ' . $this->name . '<br>' . 'Your Age is ' . $this->age;
    }
}

// 직원 객체 생성
$employee = new Employee("JIN" , 25);
$employee->introduce();

// 직원 정보 출력

/*

클래스(Class): 객체를 만들기 위한 설계도 혹은 틀.
프로퍼티(속성, Property): 클래스 내에서 선언된 변수로, 클래스의 상태를 나타냅니다. private 키워드로 선언되면 외부에서 직접 접근할 수 없습니다.
매직 메서드(Magic Methods): 특별한 이름을 가진 메서드로, PHP 내에서 자동으로 호출되는 메서드입니다. __construct, __set, __get 등이 이에 해당합니다.
생성자(Constructor): 객체가 생성될 때 자동으로 호출되는 메서드입니다. __construct라는 이름을 가집니다.
인스턴스(Instance): 클래스를 기반으로 생성된 객체를 의미합니다. new 키워드를 사용하여 생성됩니다

*/


/*




__set 매직 메서드
__set 매직 메서드는 객체의 프로퍼티에 값을 설정할 때 자동으로 호출되는 메서드입니다. 즉, 직접적인 프로퍼티 할당을 가로채서 사용자가 원하는 로직을 수행할 수 있습니다.

이 메서드가 필요한 이유는 객체의 프로퍼티에 직접 접근하는 것을 제한하고, 값의 유효성 검사나 추가적인 로직을 적용하기 위함입니다.

예를 들어, 나이 프로퍼티에 음수 값을 할당하려고 할 때 에러를 방지하거나, 이름에 대한 유효성 검사를 수행할 수 있습니다.

__get 매직 메서드
__get 매직 메서드는 객체의 프로퍼티 값을 가져올 때 자동으로 호출되는 메서드입니다. 이 메서드를 사용하면 직접적인 프로퍼티 접근을 가로채서 원하는 로직을 수행할 수 있습니다.

예를 들어, name 프로퍼티의 값을 가져올 때 대문자로 변환하거나, 나이가 18 미만인 경우 "미성년자"라는 문자열을 반환하는 등의 추가적인 처리를 할 수 있습니다.

왜 필요한가?
캡슐화 (Encapsulation): 객체의 내부 상태를 보호하기 위해 외부에서 직접적으로 접근하는 것을 제한하고, 메서드를 통해 안전하게 접근하게 합니다.
유효성 검사: 값이 올바른 형식인지 확인하거나, 특정 조건을 만족하는지 검사할 수 있습니다.
동적 프로퍼티 설정: __set을 사용하면 동적으로 프로퍼티를 추가하거나 수정할 수 있습니다. 이로 인해 객체의 구조를 유연하게 관리할 수 있습니다.
객체의 상태 관리: __get을 사용하여 객체의 상태를 동적으로 반환하거나, 특정 조건에 따라 상태를 변환할 수 있습니다.


예시)

public function __set($var, $value)
{
    if ($var === 'age' && $value < 0) {
        throw new Exception("Age cannot be negative");
    }
    $this->{$var} = $value;
}

public function __get($var)
{
    if ($var === 'name') {
        return strtoupper($this->{$var});
    }
    return $this->{$var};
}


*/
?>
