<?php
    class Job
    {
        private $title;
        private $amount_paid;
        private $employer;

        function __construct($job_title, $job_amount_paid, $employer)
        {
            $this->title = $job_title;
            $this->amount_paid = $job_amount_paid;
            $this->employer = $employer;
        }

        // JOB TITLE Setter & Getter
        function setTitle($new_title)
        {
            $this->title = $new_title;
        }
        function getTitle()
        {
            return $this->title;
        }

        // JOB AMOUNT-PAID Setter & Getter
        function setPay($new_amount_paid)
        {
            $this->amount_paid = $new_amount_paid;
        }
        function getPay()
        {
            return $this->amount_paid;
        }

        // EMPLOYER Setter & Getter
        function setEmployer($new_employer)
        {
            $this->employer = $new_employer;
        }
        function getEmployer()
        {
            return $this->employer;
        }


          // Save Job (Instantiation)
          function save()
          {
              array_push($_SESSION['array_of_jobs'], $this);
          }

          // GET All Jobs (array)
          static function getAll()
          {
              return $_SESSION['array_of_jobs'];
          }

          // DELETE All Jobs (Empty Array)
          static function deleteAll()
          {
              $_SESSION['array_of_jobs'] = array();
          }

    }
?>
