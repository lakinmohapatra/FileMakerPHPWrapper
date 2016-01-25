<?php
interface DatabaseAdapterInterface
{
    function connect();
    function save();
    function delete();
    function where();
}