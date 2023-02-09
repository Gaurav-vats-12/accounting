<?php

return [

    'auth'                  => 'प्रमाणीकरण',
    'profile'               => 'प्रोफ़ाइल',
    'logout'                => 'लॉग आउट',
    'login'                 => 'लॉग इन करें',
    'forgot'                => 'भूल गया',
    'login_to'              => 'अपना सेशन शुरू करने के लिए लॉगिन करे',
    'remember_me'           => 'मुझे याद रखना',
    'forgot_password'       => 'मैं अपना पासवर्ड भूल गया',
    'reset_password'        => 'पासवर्ड रीसेट',
    'change_password'       => 'पासवर्ड बदलें',
    'enter_email'           => 'अपना ईमेल दर्ज करे',
    'current_email'         => 'वर्तमान ईमेल',
    'reset'                 => 'रीसेट',
    'never'                 => 'कभी नहीँ',
    'landing_page'          => 'लैंडिंग पेज',
    'personal_information'  => 'व्यक्तिगत जानकारी',
    'register_user'         => 'उपयोगकर्ता पंजीकृत करें',
    'register'              => 'पंजीकरण करें',

    'form_description' => [
        'personal'          => 'आमंत्रण लिंक नए उपयोगकर्ता को भेजा जाएगा, इसलिए सुनिश्चित करें कि ईमेल पता सही है। वे अपना पासवर्ड दर्ज करने में सक्षम होंगे।',
        'assign'            => 'उपयोगकर्ता के पास चयनित कंपनियों तक एक्सेस होगी। आप <a href=":url" class="border-b border-black">भूमिका (Roles)</a> पृष्ठ से अनुमतियों (Permission) को प्रतिबंधित कर सकते हैं।',
        'preferences'       => 'उपयोगकर्ता की डिफ़ॉल्ट भाषा का चयन करें। उपयोगकर्ता के लॉग इन करने के बाद आप लैंडिंग पृष्ठ भी सेट कर सकते हैं।',
    ],

    'password' => [
        'pass'              => 'पासवर्ड',
        'pass_confirm'      => 'पासवर्ड पुष्टि करें',
        'current'           => 'पासवर्ड',
        'current_confirm'   => 'पासवर्ड पुष्टि करें',
        'new'               => 'नया पासवर्ड',
        'new_confirm'       => 'नया पासवर्ड पुष्टि करें',
    ],

    'error' => [
        'self_delete'       => 'त्रुटि: अपने आप को हटा नहीं सकते हैं!',
        'self_disable'      => 'त्रुटि: अपने आप को निष्क्रिय नहीं सकते हैं!',
        'unassigned'        => 'त्रुटि: कंपनी को अनअसाइन नहीं किया जा सकता! :company कंपनी को कम से कम एक उपयोगकर्ता असाइन किया जाना चाहिए।',
        'no_company'        => 'त्रुटि: आपके खाते को कोई कंपनी नहीं सौंपी गई। कृपया सिस्टम व्यवस्थापक से संपर्क करें।',
    ],

    'login_redirect'        => 'सत्यापन हो गया! आप को ले जाय जा रहा है...',
    'failed'                => 'ये प्रमाण हमारे रिकॉर्ड से मेल नहीं खा रहे हैं।',
    'throttle'              => 'बहुत सारे लॉगिन प्रयास। :seconds सेकंड में फिर से कोशिश करें।',
    'disabled'              => 'यह खाता निष्क्रिय है। कृपया सिस्टम व्यवस्थापक से संपर्क करें।',

    'notification' => [
        'message_1'         => 'आप यह ईमेल प्राप्त कर रहे हैं क्योंकि हमें आपके खाते के लिए पासवर्ड रीसेट अनुरोध प्राप्त हुआ है।',
        'message_2'         => 'यदि आपने पासवर्ड रीसेट का अनुरोध नहीं किया है, तो आगे की कार्रवाई की आवश्यकता नहीं है।',
        'button'            => 'पासवर्ड रीसेट',
    ],

    'invitation' => [
        'message_1'         => 'आपको यह ईमेल इसलिए प्राप्त हो रहा है क्योंकि आपको Workhy Books में शामिल होने के लिए आमंत्रित किया गया है।',
        'message_2'         => 'यदि आप शामिल नहीं होना चाहते हैं, तो आगे किसी गतिविधि की आवश्यकता नहीं है।',
        'button'            => 'शुरू करें',
    ],

    'information' => [
        'invoice'           => 'आसानी से चालान बनाएं',
        'reports'           => 'विस्तृत रिपोर्ट प्राप्त करें',
        'expense'           => 'किसी भी खर्च को ट्रैक करें',
        'customize'         => 'अपनी Workhy Books को अनुकूलित करें',
    ],

    'roles' => [
        'admin' => [
            'name'          => 'व्यवस्थापक',
            'description'   => 'उन्हें ग्राहकों, इनवॉइस, रिपोर्ट, सेटिंग्स और ऐप्स सहित आपकी Workhy Books तक पूरी पहुंच मिलती है।',
        ],
        'manager' => [
            'name'          => 'प्रबंधक',
            'description'   => 'उन्हें आपके Workhy Books का पूरा एक्सेस मिलता है, लेकिन वे उपयोगकर्ताओं और ऐप्स को प्रबंधित नहीं कर सकते।',
        ],
        'customer' => [
            'name'          => 'ग्राहक',
            'description'   => 'वे क्लाइंट पोर्टल तक पहुंच सकते हैं और आपके द्वारा सेट की गई भुगतान विधियों के माध्यम से अपने चालानों का ऑनलाइन भुगतान कर सकते हैं।',
        ],
        'accountant' => [
            'name'          => 'मुनीम',
            'description'   => 'वे चालान, लेनदेन और रिपोर्ट तक पहुंच सकते हैं और जर्नल प्रविष्टियां बना सकते हैं।',
        ],
        'employee' => [
            'name'          => 'कर्मचारी',
            'description'   => 'वे व्यय के दावे बना सकते हैं और असाइन किए गए प्रोजेक्ट के लिए समय ट्रैक कर सकते हैं, लेकिन केवल अपनी जानकारी देख सकते हैं।',
        ],
    ],

];
