<?php
    namespace student;

    class fees {

        public function stu_name () {
            echo 'hello student your name is xyz  <br>';
        }

        public function stu_fees () {
            echo 'hello student fees is 3500  <br> ';
        }

    }

    class course {

        public function stu_course () {
            echo 'hello student your course is b.tech  <br>';
        }

        public function course_fees () {
            echo 'hello student fees is 500  per subject  <br>';
        }

    }

    namespace teacher ;

    class salary {

        public function name () {
            echo 'hello student your name is teacher 1  <br>';
        }

        public function fees () {
            echo 'hello student fees is 10000 per month   <br>';
        }

    }

    class Teach_ourse {

        public function stu_course () {
            echo 'hello student your course is Physics , chem , maths <br>';
        }

        public function course () {
            echo 'hello student fees is 500  per subject  <br>';
        }

    }
?>