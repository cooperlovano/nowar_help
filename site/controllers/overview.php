<?php

return function ($kirby, $page) {

    // if the form has been submitted…
    if ($kirby->request()->is('POST') && get('add')) {

        // check the honeypot and exit if is has been filled in
        if(empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        $data = [
            'title'    => get('title'),
            'country' => get('country'),
            'topic'   => get('topic'),
            'description' => get('description'),
            'link' => get('adress')
        ];

        $rules = [
            'title'  => ['required'],
            'link'  => ['required', 'url'],
        ];

        $messages = [
            'title'  => t('addressource_error'),
            'link' => t('addressource_error-url'),
        ];

        // some of the data is invalid
        if ($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

        } else {

            // authenticate as almighty
            $kirby->impersonate('kirby');

            // everything is ok, let's try to create a new registration
            try {
                $links = $kirby->site()->page('suggestions')->links()->yaml();
                $links[] = $data;
  
                $kirby->site()->page('suggestions')->update(array(
                    'links' => yaml::encode($links),
                ), 'en');
                go('success');


            } catch (Exception $e) {
                $alert = ['Your registration failed: ' . $e->getMessage()];
            }
        }
    }

    // return data to template
    return [
        'alert' => $alert ?? null,
        'data'  => $data ?? false,
    ];
};