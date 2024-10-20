<?php

namespace roterpanda\Designpatterns\Behavioural\State;

enum UserRoles
{
    case Reader;
    case Editor;
    case Admin;
}