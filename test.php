<!-- # Traits
class A extends C{
    use CheckingConnection1;
    public functon fetchData() {
        echo "Hello World";
    }

}


class B extends D{ 
   use CheckingConnection1, CheckingConnection2;
    public fnction getData(){
        echo "Hello World";
    }
}

class D {
    public function connectionClose(){

    }
}

traits CheckingConnection1 {
    public function connect(){
        echo "Hello World";
    } 
}
traits CheckingConnection2 {
    public function connect(){
        echo "Hello World";
    } 
} -->