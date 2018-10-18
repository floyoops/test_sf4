# This file contains a user story for demonstration only.
# Learn how to get started with Behat and BDD on Behat's website:
# http://behat.org/en/latest/quick_start.html

Feature:
  In order to prove that the Behat Symfony extension is correctly installed
  As a user
  I want to have a demo scenario

  Scenario: get test
    When I send a GET request to "/test"
    Then the JSON node a should be equal to b
    Then the JSON node test should not be null

  Scenario: get test2
    When I send a GET request to "/test2"
    And print last JSON response
