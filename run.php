<?php


function sendJson($json) {

    $postUrl = 'http://192.168.33.33/alexa/v1.0';

    $curl = curl_init($postUrl);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
    //curl_setopt($curl, CURLOPT_TIMEOUT, 2);

    $response = curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    echo '> ' . preg_replace('/\n */', '', $json) . "\n";
    echo "< $status $response\n\n";
}


sendJson(<<<EOF
{
  "version":"1.0",
  "session":{
    "new":true,
    "sessionId":"S1",
    "application":{
      "applicationId":"1234"
    },
    "user":{
      "userId":"AlanKent"
    }
  },
  "request":{
    "type": "LaunchRequest",
    "requestId": "R0",
    "timestamp": "2015-05-13T12:34:00Z"
  }
}
EOF
);

sendJson(<<<EOF
{
  "version":"1.0",
  "session":{
    "new":false,
    "sessionId":"S1",
    "application":{
      "applicationId":"1234"
    },
    "user":{
      "userId":"AlanKent"
    }
  },
  "request":{
    "type": "IntentRequest",
    "requestId": "R1",
    "timestamp": "2015-05-13T12:34:56Z",
    "intent": {
      "name": "ReportOrderCount"
    }
  }
}
EOF
);

sendJson(<<<EOF
{
  "version":"1.0",
  "session":{
    "new":true,
    "sessionId":"S2",
    "application":{
      "applicationId":"1234"
    },
    "user":{
      "userId":"AlanKent"
    }
  },
  "request":{
    "type": "IntentRequest",
    "requestId": "R2",
    "timestamp": "2015-05-13T12:34:56Z",
    "intent": {
      "name": "FindNextOrder"
    }
  }
}
EOF
);

sendJson(<<<EOF
{
  "version":"1.0",
  "session":{
    "new":false,
    "sessionId":"S2",
    "application":{
      "applicationId":"1234"
    },
    "user":{
      "userId":"AlanKent"
    }
  },
  "request":{
    "type": "IntentRequest",
    "requestId": "R3",
    "timestamp": "2015-05-13T12:34:56Z",
    "intent": {
      "name": "FirstOrderItem"
    }
  }
}
EOF
);

sendJson(<<<EOF
{
  "version":"1.0",
  "session":{
    "new":false,
    "sessionId":"S2",
    "application":{
      "applicationId":"1234"
    },
    "user":{
      "userId":"AlanKent"
    }
  },
  "request":{
    "type": "IntentRequest",
    "requestId": "R4",
    "timestamp": "2015-05-13T12:34:56Z",
    "intent": {
      "name": "NextOrderItem"
    }
  }
}
EOF
);

sendJson(<<<EOF
{
  "version":"1.0",
  "session":{
    "new":false,
    "sessionId":"S2",
    "application":{
      "applicationId":"1234"
    },
    "user":{
      "userId":"AlanKent"
    }
  },
  "request":{
    "type": "IntentRequest",
    "requestId": "R5",
    "timestamp": "2015-05-13T12:34:56Z",
    "intent": {
      "name": "NextOrderItem"
    }
  }
}
EOF
);

sendJson(<<<EOF
{
  "version":"1.0",
  "session":{
    "new":false,
    "sessionId":"S2",
    "application":{
      "applicationId":"1234"
    },
    "user":{
      "userId":"AlanKent"
    }
  },
  "request":{
    "type": "IntentRequest",
    "requestId": "R6",
    "timestamp": "2015-05-13T12:34:56Z",
    "intent": {
      "name": "NextOrderItem"
    }
  }
}
EOF
);

sendJson(<<<EOF
{
  "version":"1.0",
  "session":{
    "new":false,
    "sessionId":"S2",
    "application":{
      "applicationId":"1234"
    },
    "user":{
      "userId":"AlanKent"
    }
  },
  "request":{
    "type": "IntentRequest",
    "requestId": "R7",
    "timestamp": "2015-05-13T12:34:56Z",
    "intent": {
      "name": "MarkOrderAsDone"
    }
  }
}
EOF
);

