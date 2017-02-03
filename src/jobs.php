<?php
    class Job
    {
        private $title;

        function __construct($job_title)
        {
            $this->title = $job_title;
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


        // JOB TITLE Setter & Getter
        function setTitle($new_title)
        {
            $this->title = $new_title;
        }
        function getTitle()
        {
            return $this->title;
        }

    }
?>
