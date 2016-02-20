<?php

namespace Mi\SalesforceApiBundle\Api;

class sfclient
{
    private $username;
    private $password;
    private $token;
    private $path;
    private $connection;
    /**
     * @var \SforceEnterpriseClient
     */
    private $mySforceConnection = null;

    public function __construct($username, $password, $token, $path, $mySforceConnection)
    {
        $this->username = $username;
        $this->password = $password;
        $this->token = $token;
        $this->path = $path;
        $this->mySforceConnection = $mySforceConnection;
    }

    private function getConnection()
    {
        if (is_null($this->mySforceConnection->getSessionId())) {
            $this->mySforceConnection->createConnection($this->path);
            $this->mySforceConnection->login($this->username, $this->password . $this->token);
        }

        return $this->mySforceConnection;
    }

    public function salesforceConnection($query)
    {
        $this->connection = $this->getConnection();
        $response = $this->connection->query($query);

        return $response;
    }
}