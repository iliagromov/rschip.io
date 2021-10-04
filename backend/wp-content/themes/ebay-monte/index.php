<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta https-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent
        }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        abbr[data-original-title],
        abbr[title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0
        }

        dt {
            font-weight: 700
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0
        }

        blockquote {
            margin: 0 0 1rem
        }

        b,
        strong {
            font-weight: bolder
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline
        }

        a:not([href]):not([class]) {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none
        }

        code,
        kbd,
        pre,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        pre {
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            -ms-overflow-style: scrollbar
        }

        figure {
            margin: 0 0 1rem
        }

        img {
            vertical-align: middle;
            border-style: none
        }

        svg {
            overflow: hidden;
            vertical-align: middle
        }

        table {
            border-collapse: collapse
        }

        caption {
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #6c757d;
            text-align: left;
            caption-side: bottom
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent
        }

        label {
            display: inline-block;
            margin-bottom: .5rem
        }

        button {
            border-radius: 0
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        [role=button] {
            cursor: pointer
        }

        select {
            word-wrap: normal
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button
        }

        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer
        }

        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        input[type=checkbox],
        input[type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        textarea {
            overflow: auto;
            resize: vertical
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal
        }

        progress {
            vertical-align: baseline
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: none
        }

        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        output {
            display: inline-block
        }

        summary {
            display: list-item;
            cursor: pointer
        }

        template {
            display: none
        }

        [hidden] {
            display: none !important
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width:576px) {

            .container,
            .container-sm {
                max-width: 540px
            }
        }

        @media (min-width:768px) {

            .container,
            .container-md,
            .container-sm {
                max-width: 720px
            }
        }

        @media (min-width:992px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm {
                max-width: 960px
            }
        }

        @media (min-width:1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1140px
            }
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0
        }

        .no-gutters>.col,
        .no-gutters>[class*=col-] {
            padding-right: 0;
            padding-left: 0
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px
        }

        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .row-cols-1>* {
            flex: 0 0 100%;
            max-width: 100%
        }

        .row-cols-2>* {
            flex: 0 0 50%;
            max-width: 50%
        }

        .row-cols-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .row-cols-4>* {
            flex: 0 0 25%;
            max-width: 25%
        }

        .row-cols-5>* {
            flex: 0 0 20%;
            max-width: 20%
        }

        .row-cols-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }

        .col-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-3 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .col-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }

        .col-6 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }

        .col-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }

        .col-9 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }

        .col-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-first {
            order: -1
        }

        .order-last {
            order: 13
        }

        .order-0 {
            order: 0
        }

        .order-1 {
            order: 1
        }

        .order-2 {
            order: 2
        }

        .order-3 {
            order: 3
        }

        .order-4 {
            order: 4
        }

        .order-5 {
            order: 5
        }

        .order-6 {
            order: 6
        }

        .order-7 {
            order: 7
        }

        .order-8 {
            order: 8
        }

        .order-9 {
            order: 9
        }

        .order-10 {
            order: 10
        }

        .order-11 {
            order: 11
        }

        .order-12 {
            order: 12
        }

        .offset-1 {
            margin-left: 8.33333%
        }

        .offset-2 {
            margin-left: 16.66667%
        }

        .offset-3 {
            margin-left: 25%
        }

        .offset-4 {
            margin-left: 33.33333%
        }

        .offset-5 {
            margin-left: 41.66667%
        }

        .offset-6 {
            margin-left: 50%
        }

        .offset-7 {
            margin-left: 58.33333%
        }

        .offset-8 {
            margin-left: 66.66667%
        }

        .offset-9 {
            margin-left: 75%
        }

        .offset-10 {
            margin-left: 83.33333%
        }

        .offset-11 {
            margin-left: 91.66667%
        }

        @media (min-width:576px) {
            .col-sm {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-sm-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-sm-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-sm-3>* {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .row-cols-sm-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-sm-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-sm-6>* {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-sm-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-sm-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%
            }

            .col-sm-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-sm-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-sm-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .col-sm-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%
            }

            .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-sm-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%
            }

            .col-sm-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%
            }

            .col-sm-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-sm-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%
            }

            .col-sm-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%
            }

            .col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-sm-first {
                order: -1
            }

            .order-sm-last {
                order: 13
            }

            .order-sm-0 {
                order: 0
            }

            .order-sm-1 {
                order: 1
            }

            .order-sm-2 {
                order: 2
            }

            .order-sm-3 {
                order: 3
            }

            .order-sm-4 {
                order: 4
            }

            .order-sm-5 {
                order: 5
            }

            .order-sm-6 {
                order: 6
            }

            .order-sm-7 {
                order: 7
            }

            .order-sm-8 {
                order: 8
            }

            .order-sm-9 {
                order: 9
            }

            .order-sm-10 {
                order: 10
            }

            .order-sm-11 {
                order: 11
            }

            .order-sm-12 {
                order: 12
            }

            .offset-sm-0 {
                margin-left: 0
            }

            .offset-sm-1 {
                margin-left: 8.33333%
            }

            .offset-sm-2 {
                margin-left: 16.66667%
            }

            .offset-sm-3 {
                margin-left: 25%
            }

            .offset-sm-4 {
                margin-left: 33.33333%
            }

            .offset-sm-5 {
                margin-left: 41.66667%
            }

            .offset-sm-6 {
                margin-left: 50%
            }

            .offset-sm-7 {
                margin-left: 58.33333%
            }

            .offset-sm-8 {
                margin-left: 66.66667%
            }

            .offset-sm-9 {
                margin-left: 75%
            }

            .offset-sm-10 {
                margin-left: 83.33333%
            }

            .offset-sm-11 {
                margin-left: 91.66667%
            }
        }

        @media (min-width:768px) {
            .col-md {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-md-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-md-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-md-3>* {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .row-cols-md-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-md-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-md-6>* {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-md-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-md-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%
            }

            .col-md-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-md-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-md-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .col-md-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%
            }

            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-md-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%
            }

            .col-md-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%
            }

            .col-md-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-md-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%
            }

            .col-md-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%
            }

            .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-md-first {
                order: -1
            }

            .order-md-last {
                order: 13
            }

            .order-md-0 {
                order: 0
            }

            .order-md-1 {
                order: 1
            }

            .order-md-2 {
                order: 2
            }

            .order-md-3 {
                order: 3
            }

            .order-md-4 {
                order: 4
            }

            .order-md-5 {
                order: 5
            }

            .order-md-6 {
                order: 6
            }

            .order-md-7 {
                order: 7
            }

            .order-md-8 {
                order: 8
            }

            .order-md-9 {
                order: 9
            }

            .order-md-10 {
                order: 10
            }

            .order-md-11 {
                order: 11
            }

            .order-md-12 {
                order: 12
            }

            .offset-md-0 {
                margin-left: 0
            }

            .offset-md-1 {
                margin-left: 8.33333%
            }

            .offset-md-2 {
                margin-left: 16.66667%
            }

            .offset-md-3 {
                margin-left: 25%
            }

            .offset-md-4 {
                margin-left: 33.33333%
            }

            .offset-md-5 {
                margin-left: 41.66667%
            }

            .offset-md-6 {
                margin-left: 50%
            }

            .offset-md-7 {
                margin-left: 58.33333%
            }

            .offset-md-8 {
                margin-left: 66.66667%
            }

            .offset-md-9 {
                margin-left: 75%
            }

            .offset-md-10 {
                margin-left: 83.33333%
            }

            .offset-md-11 {
                margin-left: 91.66667%
            }
        }

        @media (min-width:992px) {
            .col-lg {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-lg-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-lg-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-lg-3>* {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .row-cols-lg-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-lg-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-lg-6>* {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-lg-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-lg-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%
            }

            .col-lg-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-lg-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-lg-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .col-lg-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%
            }

            .col-lg-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-lg-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%
            }

            .col-lg-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%
            }

            .col-lg-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-lg-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%
            }

            .col-lg-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%
            }

            .col-lg-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-lg-first {
                order: -1
            }

            .order-lg-last {
                order: 13
            }

            .order-lg-0 {
                order: 0
            }

            .order-lg-1 {
                order: 1
            }

            .order-lg-2 {
                order: 2
            }

            .order-lg-3 {
                order: 3
            }

            .order-lg-4 {
                order: 4
            }

            .order-lg-5 {
                order: 5
            }

            .order-lg-6 {
                order: 6
            }

            .order-lg-7 {
                order: 7
            }

            .order-lg-8 {
                order: 8
            }

            .order-lg-9 {
                order: 9
            }

            .order-lg-10 {
                order: 10
            }

            .order-lg-11 {
                order: 11
            }

            .order-lg-12 {
                order: 12
            }

            .offset-lg-0 {
                margin-left: 0
            }

            .offset-lg-1 {
                margin-left: 8.33333%
            }

            .offset-lg-2 {
                margin-left: 16.66667%
            }

            .offset-lg-3 {
                margin-left: 25%
            }

            .offset-lg-4 {
                margin-left: 33.33333%
            }

            .offset-lg-5 {
                margin-left: 41.66667%
            }

            .offset-lg-6 {
                margin-left: 50%
            }

            .offset-lg-7 {
                margin-left: 58.33333%
            }

            .offset-lg-8 {
                margin-left: 66.66667%
            }

            .offset-lg-9 {
                margin-left: 75%
            }

            .offset-lg-10 {
                margin-left: 83.33333%
            }

            .offset-lg-11 {
                margin-left: 91.66667%
            }
        }

        @media (min-width:1200px) {
            .col-xl {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-xl-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-xl-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-xl-3>* {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .row-cols-xl-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-xl-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-xl-6>* {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-xl-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-xl-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%
            }

            .col-xl-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-xl-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-xl-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .col-xl-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%
            }

            .col-xl-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-xl-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%
            }

            .col-xl-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%
            }

            .col-xl-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-xl-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%
            }

            .col-xl-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%
            }

            .col-xl-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-xl-first {
                order: -1
            }

            .order-xl-last {
                order: 13
            }

            .order-xl-0 {
                order: 0
            }

            .order-xl-1 {
                order: 1
            }

            .order-xl-2 {
                order: 2
            }

            .order-xl-3 {
                order: 3
            }

            .order-xl-4 {
                order: 4
            }

            .order-xl-5 {
                order: 5
            }

            .order-xl-6 {
                order: 6
            }

            .order-xl-7 {
                order: 7
            }

            .order-xl-8 {
                order: 8
            }

            .order-xl-9 {
                order: 9
            }

            .order-xl-10 {
                order: 10
            }

            .order-xl-11 {
                order: 11
            }

            .order-xl-12 {
                order: 12
            }

            .offset-xl-0 {
                margin-left: 0
            }

            .offset-xl-1 {
                margin-left: 8.33333%
            }

            .offset-xl-2 {
                margin-left: 16.66667%
            }

            .offset-xl-3 {
                margin-left: 25%
            }

            .offset-xl-4 {
                margin-left: 33.33333%
            }

            .offset-xl-5 {
                margin-left: 41.66667%
            }

            .offset-xl-6 {
                margin-left: 50%
            }

            .offset-xl-7 {
                margin-left: 58.33333%
            }

            .offset-xl-8 {
                margin-left: 66.66667%
            }

            .offset-xl-9 {
                margin-left: 75%
            }

            .offset-xl-10 {
                margin-left: 83.33333%
            }

            .offset-xl-11 {
                margin-left: 91.66667%
            }
        }

        .flex-row {
            flex-direction: row !important
        }

        .flex-column {
            flex-direction: column !important
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-wrap {
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .flex-fill {
            flex: 1 1 auto !important
        }

        .flex-grow-0 {
            flex-grow: 0 !important
        }

        .flex-grow-1 {
            flex-grow: 1 !important
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-shrink-1 {
            flex-shrink: 1 !important
        }

        .justify-content-start {
            justify-content: flex-start !important
        }

        .justify-content-end {
            justify-content: flex-end !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-between {
            justify-content: space-between !important
        }

        .justify-content-around {
            justify-content: space-around !important
        }

        .align-items-start {
            align-items: flex-start !important
        }

        .align-items-end {
            align-items: flex-end !important
        }

        .align-items-center {
            align-items: center !important
        }

        .align-items-baseline {
            align-items: baseline !important
        }

        .align-items-stretch {
            align-items: stretch !important
        }

        .align-content-start {
            align-content: flex-start !important
        }

        .align-content-end {
            align-content: flex-end !important
        }

        .align-content-center {
            align-content: center !important
        }

        .align-content-between {
            align-content: space-between !important
        }

        .align-content-around {
            align-content: space-around !important
        }

        .align-content-stretch {
            align-content: stretch !important
        }

        .align-self-auto {
            align-self: auto !important
        }

        .align-self-start {
            align-self: flex-start !important
        }

        .align-self-end {
            align-self: flex-end !important
        }

        .align-self-center {
            align-self: center !important
        }

        .align-self-baseline {
            align-self: baseline !important
        }

        .align-self-stretch {
            align-self: stretch !important
        }

        @media (min-width:576px) {
            .flex-sm-row {
                flex-direction: row !important
            }

            .flex-sm-column {
                flex-direction: column !important
            }

            .flex-sm-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-sm-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-sm-wrap {
                flex-wrap: wrap !important
            }

            .flex-sm-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-sm-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-sm-fill {
                flex: 1 1 auto !important
            }

            .flex-sm-grow-0 {
                flex-grow: 0 !important
            }

            .flex-sm-grow-1 {
                flex-grow: 1 !important
            }

            .flex-sm-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-sm-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-sm-start {
                justify-content: flex-start !important
            }

            .justify-content-sm-end {
                justify-content: flex-end !important
            }

            .justify-content-sm-center {
                justify-content: center !important
            }

            .justify-content-sm-between {
                justify-content: space-between !important
            }

            .justify-content-sm-around {
                justify-content: space-around !important
            }

            .align-items-sm-start {
                align-items: flex-start !important
            }

            .align-items-sm-end {
                align-items: flex-end !important
            }

            .align-items-sm-center {
                align-items: center !important
            }

            .align-items-sm-baseline {
                align-items: baseline !important
            }

            .align-items-sm-stretch {
                align-items: stretch !important
            }

            .align-content-sm-start {
                align-content: flex-start !important
            }

            .align-content-sm-end {
                align-content: flex-end !important
            }

            .align-content-sm-center {
                align-content: center !important
            }

            .align-content-sm-between {
                align-content: space-between !important
            }

            .align-content-sm-around {
                align-content: space-around !important
            }

            .align-content-sm-stretch {
                align-content: stretch !important
            }

            .align-self-sm-auto {
                align-self: auto !important
            }

            .align-self-sm-start {
                align-self: flex-start !important
            }

            .align-self-sm-end {
                align-self: flex-end !important
            }

            .align-self-sm-center {
                align-self: center !important
            }

            .align-self-sm-baseline {
                align-self: baseline !important
            }

            .align-self-sm-stretch {
                align-self: stretch !important
            }
        }

        @media (min-width:768px) {
            .flex-md-row {
                flex-direction: row !important
            }

            .flex-md-column {
                flex-direction: column !important
            }

            .flex-md-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-md-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-md-wrap {
                flex-wrap: wrap !important
            }

            .flex-md-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-md-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-md-fill {
                flex: 1 1 auto !important
            }

            .flex-md-grow-0 {
                flex-grow: 0 !important
            }

            .flex-md-grow-1 {
                flex-grow: 1 !important
            }

            .flex-md-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-md-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-md-start {
                justify-content: flex-start !important
            }

            .justify-content-md-end {
                justify-content: flex-end !important
            }

            .justify-content-md-center {
                justify-content: center !important
            }

            .justify-content-md-between {
                justify-content: space-between !important
            }

            .justify-content-md-around {
                justify-content: space-around !important
            }

            .align-items-md-start {
                align-items: flex-start !important
            }

            .align-items-md-end {
                align-items: flex-end !important
            }

            .align-items-md-center {
                align-items: center !important
            }

            .align-items-md-baseline {
                align-items: baseline !important
            }

            .align-items-md-stretch {
                align-items: stretch !important
            }

            .align-content-md-start {
                align-content: flex-start !important
            }

            .align-content-md-end {
                align-content: flex-end !important
            }

            .align-content-md-center {
                align-content: center !important
            }

            .align-content-md-between {
                align-content: space-between !important
            }

            .align-content-md-around {
                align-content: space-around !important
            }

            .align-content-md-stretch {
                align-content: stretch !important
            }

            .align-self-md-auto {
                align-self: auto !important
            }

            .align-self-md-start {
                align-self: flex-start !important
            }

            .align-self-md-end {
                align-self: flex-end !important
            }

            .align-self-md-center {
                align-self: center !important
            }

            .align-self-md-baseline {
                align-self: baseline !important
            }

            .align-self-md-stretch {
                align-self: stretch !important
            }
        }

        @media (min-width:992px) {
            .flex-lg-row {
                flex-direction: row !important
            }

            .flex-lg-column {
                flex-direction: column !important
            }

            .flex-lg-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-lg-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-lg-wrap {
                flex-wrap: wrap !important
            }

            .flex-lg-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-lg-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-lg-fill {
                flex: 1 1 auto !important
            }

            .flex-lg-grow-0 {
                flex-grow: 0 !important
            }

            .flex-lg-grow-1 {
                flex-grow: 1 !important
            }

            .flex-lg-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-lg-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-lg-start {
                justify-content: flex-start !important
            }

            .justify-content-lg-end {
                justify-content: flex-end !important
            }

            .justify-content-lg-center {
                justify-content: center !important
            }

            .justify-content-lg-between {
                justify-content: space-between !important
            }

            .justify-content-lg-around {
                justify-content: space-around !important
            }

            .align-items-lg-start {
                align-items: flex-start !important
            }

            .align-items-lg-end {
                align-items: flex-end !important
            }

            .align-items-lg-center {
                align-items: center !important
            }

            .align-items-lg-baseline {
                align-items: baseline !important
            }

            .align-items-lg-stretch {
                align-items: stretch !important
            }

            .align-content-lg-start {
                align-content: flex-start !important
            }

            .align-content-lg-end {
                align-content: flex-end !important
            }

            .align-content-lg-center {
                align-content: center !important
            }

            .align-content-lg-between {
                align-content: space-between !important
            }

            .align-content-lg-around {
                align-content: space-around !important
            }

            .align-content-lg-stretch {
                align-content: stretch !important
            }

            .align-self-lg-auto {
                align-self: auto !important
            }

            .align-self-lg-start {
                align-self: flex-start !important
            }

            .align-self-lg-end {
                align-self: flex-end !important
            }

            .align-self-lg-center {
                align-self: center !important
            }

            .align-self-lg-baseline {
                align-self: baseline !important
            }

            .align-self-lg-stretch {
                align-self: stretch !important
            }
        }

        @media (min-width:1200px) {
            .flex-xl-row {
                flex-direction: row !important
            }

            .flex-xl-column {
                flex-direction: column !important
            }

            .flex-xl-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-xl-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-xl-wrap {
                flex-wrap: wrap !important
            }

            .flex-xl-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-xl-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-xl-fill {
                flex: 1 1 auto !important
            }

            .flex-xl-grow-0 {
                flex-grow: 0 !important
            }

            .flex-xl-grow-1 {
                flex-grow: 1 !important
            }

            .flex-xl-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-xl-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-xl-start {
                justify-content: flex-start !important
            }

            .justify-content-xl-end {
                justify-content: flex-end !important
            }

            .justify-content-xl-center {
                justify-content: center !important
            }

            .justify-content-xl-between {
                justify-content: space-between !important
            }

            .justify-content-xl-around {
                justify-content: space-around !important
            }

            .align-items-xl-start {
                align-items: flex-start !important
            }

            .align-items-xl-end {
                align-items: flex-end !important
            }

            .align-items-xl-center {
                align-items: center !important
            }

            .align-items-xl-baseline {
                align-items: baseline !important
            }

            .align-items-xl-stretch {
                align-items: stretch !important
            }

            .align-content-xl-start {
                align-content: flex-start !important
            }

            .align-content-xl-end {
                align-content: flex-end !important
            }

            .align-content-xl-center {
                align-content: center !important
            }

            .align-content-xl-between {
                align-content: space-between !important
            }

            .align-content-xl-around {
                align-content: space-around !important
            }

            .align-content-xl-stretch {
                align-content: stretch !important
            }

            .align-self-xl-auto {
                align-self: auto !important
            }

            .align-self-xl-start {
                align-self: flex-start !important
            }

            .align-self-xl-end {
                align-self: flex-end !important
            }

            .align-self-xl-center {
                align-self: center !important
            }

            .align-self-xl-baseline {
                align-self: baseline !important
            }

            .align-self-xl-stretch {
                align-self: stretch !important
            }
        }

        ol,
        ul {
            margin: 0;
            padding: 0
        }

        picture {
            display: block
        }

        table {
            table-layout: fixed
        }

        .h1,
        h1 {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.33
        }

        @media (min-width:992px) {

            .h1,
            h1 {
                font-size: 54px;
                font-weight: 500
            }
        }

        .h2,
        h2 {
            font-size: 32px;
            font-weight: 500;
            line-height: 1.37
        }

        .h3,
        h3 {
            font-size: 28px;
            font-weight: 700
        }

        body {
            font-size: 16px;
            color: #222
        }

        .wrap-site {
            overflow: hidden;
            font-size: 16px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            color: #222;
            line-height: 1.5
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            max-width: 1070px
        }

        .section {
            padding: 50px 0
        }

        @media (min-width:768px) {
            .section {
                padding: 70px 0
            }
        }

        .visually-hidden {
            position: absolute;
            overflow: hidden;
            clip: rect(0 0 0 0);
            height: 1px;
            width: 1px;
            margin: -1px;
            padding: 0;
            border: 0
        }

        .responsive-img,
        .responsive-media {
            position: relative;
            background-position: center
        }

        .responsive-img:before,
        .responsive-media:before {
            content: '';
            display: block;
            width: 100%;
            height: 0;
            padding-top: 100%
        }

        .responsive-img>img,
        .responsive-img>picture,
        .responsive-img>picture>img,
        .responsive-img>video,
        .responsive-media>img,
        .responsive-media>picture,
        .responsive-media>picture>img,
        .responsive-media>video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        img {
            max-width: 100%;
        }

        /* __page__ */
        .page__title {
            color: #222222;
            font-size: 32px;
            line-height: 137%;
            padding-bottom: 35px;
            margin: 0;
            text-align: center;
            font-weight: normal;
        }

        @media (min-width:992px) {
            .page__title {
                font-size: 54px;
                line-height: 133%;
                padding-bottom: 80px;
            }
        }

        /* __page__ */
        /* __hero__ */
        .hero {
            padding-top: 69px;
        }

        @media (min-width:992px) {
            .hero {
                padding-top: 145px;
            }
        }

        .hero__img-wrap {
            text-align: center;
        }

        .hero__img-wrap img {
            -o-object-fit: contain;
            object-fit: contain
        }

        /* __hero__ */

        /* __details__ */
        .details {
            padding-top: 121px;
        }

        @media (min-width:992px) {
            .details {
                padding-top: 157px;
            }
        }

        .details__item {
            padding-top: 55px;
        }

        .details__img-wrap {
            text-align: center;
        }

        @media (min-width:768px) {
            .details__img-wrap {
                text-align: left;
            }
        }

        .details__img-wrap img {
            -o-object-fit: contain;
            object-fit: contain
        }

        .details-content {
            padding-top: 40px;
        }

        .details-content__title {
            color: #222222;
            margin-bottom: 15px;
            font-size: 24px;
            line-height: 133%;
            font-weight: 500;

        }

        @media (min-width:992px) {
            .details-content__title {
                font-size: 32px;
                line-height: 125%;
            }
        }


        .details-content__text {
            color: #222222;
            max-width: 440px;
            font-size: 16px;
            line-height: 175%;
            margin: 0
        }

        /* __details__ */

        /* __installation__ */

        .installation {
            padding-top: 118px;
        }

        @media screen and (min-width:992px) {
            .installation {
                padding-top: 160px;
            }
        }

        .installation__img-wrap {
            text-align: center;
        }

        /* __installation__ */

        /* __soft__ */
        .soft {
            padding-top: 121px;
        }

        @media screen and (min-width:992px) {
            .soft {
                padding-top: 160px;
            }
        }

        .soft .container {
            width: 90%;
            background-color: #f7f8fa;
            border-radius: 12px;
            position: relative;
            padding-bottom: 39px;
        }

        @media screen and (min-width:768px) {
            .soft .container {
                padding-bottom: 0;
            }
        }


        .soft-content {
            padding: 43px 17px 0 17px;
        }

        @media screen and (min-width:768px) {
            .soft-content {
                padding: 90px 0 40px 30px;
            }
        }


        @media screen and (min-width:992px) {
            .soft-content {
                padding: 80px 0 80px 65px;
            }
        }

       
        .soft-content__item {
            display: flex;
            align-items: center;
            margin-bottom: 13px;
        }

        .soft-content__item svg {
            min-width: 60px;
        }

        .soft-content__item p {
            color: #222222;
            font-size: 16px;
            line-height: 150%;
            font-weight: bold;
            margin-left: 20px;
        }



        .soft__img-wrap {}


        /* __soft__ */

        .exposition {
            padding-top: 118px
        }

        @media (min-width:768px) {
            .exposition {
                padding-top: 120px
            }
        }

        @media (min-width:992px) {
            .exposition {
                padding-top: 160px
            }

        }

       



        .exposition__image-wrap {
            display: block;
            left: 50%;
            width: 700px;
            margin-left: -170px
        }

        @media (min-width:768px) {
            .exposition__image-wrap {
                margin-left: -300px;
                width: 1200px
            }
        }

        @media (min-width:992px) {
            .exposition__image-wrap {
                margin-left: -100px
            }
        }

        @media screen and (max-width:992px) {
            .exposition__image-wrap {
                margin-left: -245px
            }
        }

        @media screen and (max-width:768px) {
            .exposition__image-wrap {
                margin: -30px 0 0 -175px
            }
        }

        .exposition__image-wrap:before {
            padding-top: 38.16667%
        }

        .exposition__nums {
            counter-reset: nums;
            list-style: none
        }

        .exposition__num {
            position: absolute;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #ff472e;
            box-shadow: 0 0 0 6px rgba(255, 71, 46, .2);
            color: #fff
        }

        .exposition__num:before {
            counter-increment: nums;
            content: counter(nums)
        }

        .exposition__num--1 {
            top: 70px;
            left: 70px
        }

        @media (min-width:768px) {
            .exposition__num--1 {
                top: 120px;
                left: 110px
            }
        }

        .exposition__num--2 {
            top: 100px;
            left: 130px
        }

        @media (min-width:768px) {
            .exposition__num--2 {
                top: 180px;
                left: 210px
            }
        }

        .exposition__num--3 {
            bottom: 60px;
            left: 303px
        }

        @media screen and (max-width:768px) {
            .exposition__num--3 {
                bottom: 25px;
                left: 170px
            }
        }

        .exposition__num--4 {
            top: 220px;
            left: 330px
        }

        @media screen and (max-width:768px) {
            .exposition__num--4 {
                top: 112px;
                left: 176px
            }
        }

        .exposition__list {
            position: relative;
            padding-left: 1em;
            margin-top: 60px
        }

        @media (min-width:768px) {
            .exposition__list {
                margin-top: -175px
            }
        }

        @media screen and (max-width:992px) {
            .exposition__list {
                margin-top: -100px
            }
        }

        @media screen and (max-width:576px) {
            .exposition__list {
                margin-top: 35px
            }
        }

        .exposition__list-item {
            margin-top: 12px;
            font-size: 18px;
            line-height: 100%;
            font-weight: bold;
        }

    
       

        @media screen and (max-width:576px) {
            .odds {
                padding: 70px 0
            }
        }

        .odds__title {
            margin-bottom: 60px
        }

        .odds__col-img {
            display: flex;
            justify-content: center;
            margin-top: 60px
        }

        @media (min-width:992px) {
            .odds__col-img {
                margin: 0
            }
        }

        @media screen and (max-width:992px) {
            .odds__col-img {
                align-items: center;
                justify-content: space-around
            }
        }

        @media screen and (max-width:768px) {
            .odds__col-img {
                flex-direction: column
            }
        }

        @media screen and (max-width:576px) {
            .odds__col-img {
                margin-top: 60px
            }
        }

        .odds__col-img .engine-list {
            margin-top: 0;
            align-items: flex-end;
            flex-wrap: wrap;
            align-self: flex-end;
            max-height: 280px
        }

        @media screen and (max-width:992px) {
            .odds__col-img .engine-list {
                align-self: unset;
                width: 50%;
                justify-content: space-around
            }
        }

        @media screen and (max-width:768px) {
            .odds__col-img .engine-list {
                width: 100%;
                margin-top: 60px
            }
        }

        .odds__col-img .engine-list__item:nth-child(-n+2) {
            margin-bottom: 60px
        }

        @media screen and (max-width:768px) {
            .odds__col-img .engine-list__item:nth-child(-n+2) {
                margin-bottom: 0
            }
        }

        @media screen and (max-width:576px) {
            .odds__col-img .engine-list__item:nth-child(-n+2) {
                margin-bottom: 60px
            }
        }

        @media screen and (max-width:992px) {
            .odds__col-img .engine-list__item:nth-child(odd) {
                margin-right: 40px
            }
        }

        @media screen and (max-width:768px) {
            .odds__col-img .engine-list__item:nth-child(odd) {
                margin-right: 0
            }
        }

        .odds__col-img .engine-list__item span {
            font-size: 28px;
            line-height: 1.429em
        }

        @media screen and (max-width:992px) {
            .odds__col-img .engine-list__item span {
                font-size: 24px
            }
        }

        .odds__col-img .engine-list__item p {
            margin-top: 0
        }

        .odds__img-wrap {
            width: 280px;
            height: 249px
        }

        @media (min-width:992px) {
            .odds__img-wrap {
                width: 416px;
                left: 50px;
                top: 0;
                position: absolute
            }
        }

        @media screen and (max-width:992px) {
            .odds__img-wrap {
                position: static
            }
        }

        @media screen and (max-width:576px) {
            .odds__img-wrap {
                max-width: 315px;
                width: 100%
            }
        }

        .odds__img-wrap:before {
            padding-top: 85.57692%
        }

        @media screen and (max-width:992px) {
            .odds__img-wrap:before {
                display: none
            }
        }

        .odds__img-wrap img {
            -o-object-fit: contain;
            object-fit: contain
        }

        @media screen and (max-width:992px) {
            .odds__img-wrap img {
                position: static
            }
        }

        .odds__list {
            margin-top: -40px;
            list-style: none
        }

        .odds__item {
            margin-top: 40px
        }

        @media screen and (max-width:992px) {
            .odds__item {
                margin-top: 45px
            }
        }

        .odds__item-icon {
            display: block;
            font-size: 34px;
            margin-bottom: 15px
        }

        .odds__item-icon svg {
            display: block
        }

        .odds__item-text {
            font-size: 18px;
            font-weight: 500;
            line-height: 1.3
        }

        @media (min-width:768px) {
            .odds__item-text {
                font-size: 24px
            }
        }

        @media screen and (max-width:992px) {
            .tech-specs {
                padding-top: 110px
            }
        }

        @media screen and (max-width:576px) {
            .tech-specs {
                padding-top: 70px
            }
        }

        .tech-specs .container {
            padding-left: 80px
        }

        @media screen and (max-width:992px) {
            .tech-specs .container {
                padding-left: 15px
            }
        }

        .tech-specs__title {
            margin-bottom: 65px;
            font-size: 53.5px
        }

        @media screen and (max-width:992px) {
            .tech-specs__title {
                font-size: 32px;
                line-height: 44px
            }
        }

        .tech-specs__list {
            font-size: 20px;
            margin: -36px 0 0
        }

        @media (min-width:768px) {
            .tech-specs__list {
                display: table;
                width: 100%;
                margin: 0
            }
        }

        .tech-specs__item {
            margin-top: 36px
        }

        @media (min-width:768px) {
            .tech-specs__item {
                display: table-row;
                margin: 0
            }
        }

        @media (min-width:768px) {

            .tech-specs__item-text,
            .tech-specs__item-title {
                display: table-cell;
                padding: 14px 15px
            }
        }

        .tech-specs__item-title {
            font-weight: 700;
            margin-bottom: 8px;
            padding-left: 0;
            margin: 0;
            width: 210px
        }

        @media (min-width:768px) {
            .tech-specs__item-text {
                padding-right: 0
            }
        }

        .tech-specs__col-img {
            display: flex;
            justify-content: center;
            margin-bottom: 55px
        }

        @media (min-width:768px) {
            .tech-specs__col-img {
                margin-bottom: 70px
            }
        }

        @media (min-width:992px) {
            .tech-specs__col-img {
                order: 1;
                justify-content: flex-end;
                margin-bottom: 0
            }
        }

        .tech-specs__img-wrap img {
            max-width: 100%
        }

        .box{
            padding-top:160px;
        }
        
        @media screen and (max-width:576px) {
            .box {
                padding: 90px 0
            }
        }

        .box__title {
            text-align: center;
            margin-bottom: 70px
        }

        @media screen and (max-width:576px) {
            .box__title {
                margin-bottom: 50px
            }
        }

        .box-list {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap
        }

        @media screen and (max-width:576px) {
            .box-list {
                flex-direction: column
            }
        }

        .box-list__item {
            flex: 0 0 48%;
            padding: 25px 0 35px;
            min-height: 325px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f7f8fa;
            margin-bottom: 40px;
            border-radius: 12px;
            position: relative;
            overflow: hidden
        }

        @media screen and (max-width:992px) {
            .box-list__item {
                min-height: 300px;
                margin-bottom: 30px
            }
        }

        @media screen and (max-width:768px) {
            .box-list__item {
                margin-bottom: 20px;
                padding: 25px
            }

            .box-list__item img {
                max-width: 100%
            }
        }

        @media screen and (max-width:576px) {
            .box-list__item {
                max-width: 318px;
                width: 100%;
                margin: 0 auto
            }

            .box-list__item:not(:last-child) {
                margin-bottom: 20px
            }
        }

        .box-list__item:nth-child(1),
        .box-list__item:nth-child(5) {
            padding-bottom: 0
        }

        .box-list__item:nth-child(1) picture,
        .box-list__item:nth-child(5) picture {
            margin-top: auto
        }

        .box-list__item picture {
            align-self: flex-end;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            margin: 0 auto
        }

        .box-list__title {
            font-size: 24px;
            margin-bottom: 30px;
            text-align: center
        }

        @media screen and (max-width:992px) {
            .box-list__title {
                font-size: 20px
            }
        }

        .faq__title {
            margin-bottom: 35px;
            text-align: center;
            margin-bottom: 60px
        }

        @media screen and (max-width:992px) {
            .faq__title {
                margin-bottom: 55px;
                text-align: left
            }
        }

        .faq__list {
            max-width: 944px;
            margin: 0 auto;
            padding-top: .1px
        }

        .faq__item:not(:last-child) {
            margin-bottom: 40px
        }

        .faq__item-title {
            margin-bottom: 10px
        }

        .faq__item-text {
            font-size: 20px;
            line-height: 1.6em
        }

        .faq__footnote {
            margin: 50px auto 0;
            opacity: .3;
            max-width: 944px;
            font-size: 13px
        }

        @media (min-width:768px) {
            .faq__footnote {
                margin-top: 45px
            }
        }

        @media (min-width:992px) {
            .faq__footnote {
                margin-top: 60px
            }
        }

        .support__banner {
            position: relative;
            padding: 34px 32px;
            height: 404px;
            background: #191512;
            background: linear-gradient(90deg, #191512 0, #1c1b19 100%);
            color: #fff;
            border-radius: 12px;
            overflow: hidden
        }

        @media (min-width:768px) {
            .support__banner {
                display: flex;
                align-items: center;
                height: 308px;
                padding: 20px 60px;
                background: #0f0c0b
            }
        }

        .support__title {
            font-size: 24px;
            font-weight: 500
        }

        @media (min-width:768px) {
            .support__title {
                position: relative;
                font-size: 34px;
                max-width: 300px
            }
        }

        @media (min-width:992px) {
            .support__title {
                max-width: 380px
            }
        }

        @media screen and (max-width:768px) {
            .support__title {
                position: relative
            }
        }

        .support__img-wrap {
            position: absolute;
            width: 550px;
            left: 50%;
            margin-left: -275px;
            bottom: -80px
        }

        @media (min-width:768px) {
            .support__img-wrap {
                width: 756px;
                margin: 0;
                left: auto;
                right: -180px;
                bottom: -190px
            }
        }

        @media (min-width:992px) {
            .support__img-wrap {
                right: -30px
            }
        }

        .support__img-wrap:before {
            padding-top: 66.66667%
        }

        .footer {
            padding-bottom: 140px
        }

        @media screen and (max-width:992px) {
            .footer {
                padding-top: 70px
            }
        }

        @media screen and (max-width:576px) {
            .footer {
                padding-bottom: 120px
            }
        }

        .footer-list {
            display: flex;
            justify-content: space-between
        }

        @media screen and (max-width:576px) {
            .footer-list {
                flex-direction: column;
                align-items: center
            }
        }

        .footer-list__item {
            text-align: center
        }

        @media screen and (max-width:992px) {
            .footer-list__item {
                max-width: 180px
            }
        }

        @media screen and (max-width:576px) {
            .footer-list__item:not(:last-child) {
                margin-bottom: 60px
            }
        }

        .footer-list__item svg {
            display: block;
            margin: 0 auto 15px
        }

        .footer-list__item p {
            margin: 0;
            margin-bottom: 0;
            text-align: center;
            line-height: 1.75em;
            max-width: 230px
        }

        @media screen and (max-width:992px) {
            .footer-list__item p {
                font-size: 12px
            }
        }

        .footer-list__item p span {
            font-weight: 700
        }
    </style>
</head>

<body>
    <div class="wrap-site">
        <div class="main">
            <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <h1 class="page__title">Watch Monte GTR promo video</h1>
                        </div>
                        <div class="col-12 col-sm-12 hero__col-img">
                            <picture class="hero__img-wrap">
                                <source media="(min-width: 992px)"
                                    srcset="
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgVideoPosterMd.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgVideoPosterMd-2x.png 2x">
                                <source media="(min-width: 768px)"
                                    srcset="
                                        https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgVideoPosterSm.png, 
                                        https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgVideoPosterSm-2x.png 2x">
                                <source
                                    srcset="
                                        https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgVideoPosterXs.png, 
                                        https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgVideoPosterXs-2x.png 2x">

                                <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgVideoPosterXs.png"
                                    alt="alt">
                            </picture>
                            <!-- <video controls src="https://www.youtube.com/watch?v=PLmjexxCssc&t=4s" poster="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgVideoPoster.png">
                            </video> -->
                        </div>
                    </div>
                </div>
            </section>



            <section class="details">
                <div class="container">
                    <h2 class="page__title">A powerhouse full of features</h2>
                    <div class="row details__list">
                        <div class="col-sm-6 details__item">
                            <picture class="details__img-wrap">
                                <source media="(min-width: 992px)" srcset="
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip1Md.png, 
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip1Md-2x.png 2x">
                                <source media="(min-width: 768px)"
                                    srcset="
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip1Sm.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip1Sm-2x.png 2x">

                                <source
                                    srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip1Xs.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip1Xs-2x.png 2x">

                                <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip1Xs.png"
                                    alt="alt">
                            </picture>
                            <div class="details-content">
                                <h3 class="details-content__title">Increase power and save fuel</h3>
                                <p class="details-content__text">GTR Tuning Box increase hp and torque up to +25% gives
                                    and up to +18%* MPG. </p>
                            </div>
                        </div>
                        <div class="col-sm-6 details__item">
                            <picture class="details__img-wrap">
                                <source media="(min-width: 992px)" srcset="
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip2Md.png, 
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip2Md-2x.png 2x">
                                <source media="(min-width: 768px)"
                                    srcset="
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip2Sm.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip2Sm-2x.png 2x">



                                <source srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip2Xs.png, 
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip2Xs-2x.png 2x">
                                <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip2Xs.png"
                                    alt="alt">
                            </picture>
                            <div class="details-content">
                                <h3 class="details-content__title">Change driving mode</h3>
                                <p class="details-content__text">Power programmer with 6 driving modes 2x Race, 2x Eco
                                    and 2x Mix.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 details__item">
                            <picture class="details__img-wrap">
                                <source media="(min-width: 992px)" srcset="
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip3Md.png, 
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip3Md-2x.png 2x">
                                <source media="(min-width: 768px)"
                                    srcset="
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip3Sm.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip3Sm-2x.png 2x">


                                <source
                                    srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip3Xs.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip3Xs-2x.png 2x">
                                <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip3Xs.png"
                                    alt="alt">
                            </picture>
                            <div class="details-content">
                                <h3 class="details-content__title">Read error codes</h3>
                                <p class="details-content__text">Read and clear car trouble codes.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 details__item">
                            <picture class="details__img-wrap">
                                <source media="(min-width: 992px)" srcset="
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip4Md.png, 
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip4Md-2x.png 2x">
                                <source media="(min-width: 768px)"
                                    srcset="
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip4Sm.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip4Sm-2x.png 2x">



                                <source
                                    srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip4Xs.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip4Xs-2x.png 2x">
                                <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip4Xs.png"
                                    alt="alt">
                            </picture>
                            <div class="details-content">
                                <h3 class="details-content__title">Display live gauges</h3>
                                <p class="details-content__text">Customizable gauges for car parametrs.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 details__item">
                            <picture class="details__img-wrap">
                                <source media="(min-width: 992px)" srcset="
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip5Md.png, 
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip5Md-2x.png 2x">
                                <source media="(min-width: 768px)"
                                    srcset="
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip5Sm.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip5Sm-2x.png 2x">



                                <source
                                    srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip5Xs.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip5Xs-2x.png 2x">
                                <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip5Xs.png"
                                    alt="alt">
                            </picture>
                            <div class="details-content">
                                <h3 class="details-content__title">Measure horsepower and torque</h3>
                                <p class="details-content__text">Test your performance in real time with built-in dyno
                                    machine.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 details__item">
                            <picture class="details__img-wrap">
                                <source media="(min-width: 992px)" srcset="
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip6Md.png, 
                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip6Md-2x.png 2x">
                                <source media="(min-width: 768px)"
                                    srcset="
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip6Sm.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip6Sm-2x.png 2x">



                                <source
                                    srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip6Xs.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip6Xs-2x.png 2x">
                                <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/chip6Xs.png"
                                    alt="alt">
                            </picture>
                            <div class="details-content">
                                <h3 class="details-content__title">Test 0-60, 1/4 acceleration</h3>
                                <p class="details-content__text">Measur 0-60 or 1/4 accurately right from the driver
                                    seat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="installation">
                <div class="container">
                    <h1 class="page__title">Simple installation</h1>
                    <picture class="installation__img-wrap">
                        <source media="(min-width: 992px)"
                            srcset="
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgInstallationVideoPosterMd.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgInstallationVideoPosterMd-2x.png 2x">
                        <source media="(min-width: 768px)"
                            srcset="
                                        https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgInstallationVideoPosterSm.png, 
                                        https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgInstallationVideoPosterSm-2x.png 2x">
                        <source
                            srcset="
                                        https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgInstallationVideoPosterXs.png, 
                                        https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgInstallationVideoPosterXs-2x.png 2x">

                        <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgInstallationVideoPosterXs.png"
                            alt="alt">
                    </picture>


                    <!-- <video controls src="https://www.youtube.com/watch?v=gAe6y6PzWZg"
                        poster="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgInstallationVideoPosterMd.png"></video> -->
                </div>
            </section>


            <section class="soft">
                <h1 class="page__title">Free software for your Tuning Box</h1>
                <div class="container">

                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="soft-content">
                                <div class="soft-content__list">
                                    <div class="soft-content__item"><svg width="93" height="57">
                                            <use xlink:href="#icon-infinity"></use>
                                        </svg>
                                        <p>Unlimited use. Buy once use on any out of over 8000 supported cars</p>
                                    </div>
                                    <div class="soft-content__item"><svg width="93" height="57">
                                            <use xlink:href="#icon-cloud"></use>
                                        </svg>
                                        <p>Lifetime updates and new features gauranteed</p>
                                    </div>
                                    <div class="soft-content__item"><svg width="93" height="57">
                                            <use xlink:href="#icon-car"></use>
                                        </svg>
                                        <p>Unrestricted access to all tuning database</p>
                                    </div>
                                    <div class="soft-content__item"><svg width="93" height="57">
                                            <use xlink:href="#icon-car"></use>
                                        </svg>
                                        <p>Download and share dyno charts from your tuning chip.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <picture class="soft__img-wrap">
                                <source media="(min-width: 992px)"
                                    srcset="
                                            https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgSoftMD.png, 
                                            https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgSoftMD-2x.png 2x">
                                <source media="(min-width: 768px)"
                                    srcset="
                                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgSoftSm.png, 
                                                https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgSoftSm-2x.png 2x">

                                <source
                                    srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgSoftXs.png, 
                                    https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgSoftXs-2x.png 2x">
                                <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/imgSoftXs.png"
                                    alt="alt">
                            </picture>
                        </div>
                    </div>

                </div>
            </section>

            <section class="exposition">
                <div class="container">
                    <h2 class="page__title">Tuning chip box components overview</h2>
                    <div class="responsive-media exposition__image-wrap">
                        <picture>
                            <source
                                srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/exposition.jpg, https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/exposition-2x.jpg 2x">
                            <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/exposition.jpg"
                                alt="alt">
                        </picture>
                        <ol class="exposition__nums">
                            <li class="exposition__num exposition__num--1" title="Magnet mount compatible"></li>
                            <li class="exposition__num exposition__num--2" title="3 CPUs system"></li>
                            <li class="exposition__num exposition__num--3" title="Built-in 8 GB storage"></li>
                            <li class="exposition__num exposition__num--4" title="Touch screen display"></li>
                        </ol>
                    </div>
                    <ol class="exposition__list">
                        <li class="exposition__list-item">Magnet mount compatible</li>
                        <li class="exposition__list-item">3 CPUs system</li>
                        <li class="exposition__list-item">Built-in 8 GB storage</li>
                        <li class="exposition__list-item">Touch screen display</li>
                    </ol>
                </div>
            </section>

            <section class="box">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="page__title">What's in the box?</h2>
                            <div class="box-list">
                                <div class="box-list__item">
                                    <h4 class="box-list__title">OBD2 removable cable<br>Length - 60 inches ( 5 Feet)
                                    </h4>
                                    <picture>
                                        <source
                                            srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box1.png, https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box1-2x.png 2x">
                                        <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box1.png"
                                            alt="alt">
                                    </picture>
                                </div>
                                <div class="box-list__item">
                                    <h4 class="box-list__title">Monte GTR smart tuner</h4>
                                    <picture>
                                        <source
                                            srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box2.png, https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box2-2x.png 2x">
                                        <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box2.png"
                                            alt="alt">
                                    </picture>
                                </div>
                                <div class="box-list__item">
                                    <h4 class="box-list__title">Quick start guide</h4>
                                    <picture>
                                        <source
                                            srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box3.png, https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box3-2x.png 2x">
                                        <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box3.png"
                                            alt="alt">
                                    </picture>
                                </div>
                                <div class="box-list__item">
                                    <h4 class="box-list__title">Magnet mount with suction cup</h4>
                                    <picture>
                                        <source
                                            srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box4.png, https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box4-2x.png 2x">
                                        <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box4.png"
                                            alt="alt">
                                    </picture>
                                </div>
                                <div class="box-list__item">
                                    <h4 class="box-list__title">USB cable for data transferring</h4>
                                    <picture>
                                        <source
                                            srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box5.png, https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box5-2x.png 2x">
                                        <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box5.png"
                                            alt="alt">
                                    </picture>
                                </div>
                                <div class="box-list__item">
                                    <h4 class="box-list__title">Aluminum GTR car badge</h4>
                                    <picture>
                                        <source
                                            srcset="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box6.png, https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box6-2x.png 2x">
                                        <img src="https://rschipchiptuning.com/wp-content/themes/ebay-monte/images/box6.png"
                                            alt="alt">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section tech-specs">
                <div class="container">
                    <h2 class="h1 tech-specs__title">Tech specs</h2>
                    <div class="row">
                        <div class="col">
                            <dl class="tech-specs__list">
                                <div class="tech-specs__item">
                                    <dt class="tech-specs__item-title">Performance figures</dt>
                                    <dd class="tech-specs__item-text">Up to +25% more HP*<br>Up to +25% more NM*<br>Up
                                        to +18%* more fuel savings</dd>
                                </div>
                                <div class="tech-specs__item">
                                    <dt class="tech-specs__item-title">Warranty and return</dt>
                                    <dd class="tech-specs__item-text">30 days money back and lifetime warranty on
                                        defects</dd>
                                </div>
                                <div class="tech-specs__item">
                                    <dt class="tech-specs__item-title">Software</dt>
                                    <dd class="tech-specs__item-text">Monte GTR firmware core<br>PC programmer with
                                        vehicle specific tuning database</dd>
                                </div>
                                <div class="tech-specs__item">
                                    <dt class="tech-specs__item-title">Hardware</dt>
                                    <dd class="tech-specs__item-text">16 pin obdii connector,<br>Operating t -40 C\'b0
                                        +85 C\'b0,<br>Operating voltage 7,5V - 20V,<br>Touch screen display</dd>
                                </div>
                                <div class="tech-specs__item">
                                    <dt class="tech-specs__item-title">Dimension</dt>
                                    <dd class="tech-specs__item-text">Length 4.7 inches,<br>Width 2.6 inches,<br>Hight
                                        0.6 inches</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section faq">
                <div class="container">
                    <h2 class="h2 faq__title">Top questions and answers about Monte&nbsp;GTR</h2>
                    <dl class="faq__list">
                        <div class="faq__item">
                            <dt class="h3 faq__item-title">Is it safe to use Monte GTR?</dt>
                            <dd class="faq__item-text">Yes, monte GTR is completely safe. Monte chip does not overwrite
                                the ECU software, hence there is no risk of overloading the engine's components. All
                                tuning is done on the device with by 3 dedicated CPUs. Monte chip runs vehicle specific
                                software developed specifically for your car. Each map we create is tested on the road
                                in real conditions, as well as on the dyno before uploaded to our server. Our products
                                will not affect any other electronic systems such as dashboard displays, safety
                                features, etc.</dd>
                        </div>
                        <div class="faq__item">
                            <dt class="h3 faq__item-title">Can Monte Chip be transferred to another vehicle?</dt>
                            <dd class="faq__item-text">There are no limitations on how many vehicles you can install on
                                your Monte Chip, as long as the software is supported in our database and your car brand
                                is compatible with our tuning solution. By purchasing Monte Chip you will be subscribed
                                to our lifetime service of cloud updates, new car settings and new features.</dd>
                        </div>
                        <div class="faq__item">
                            <dt class="h3 faq__item-title">What is Monte Programmer utility for?</dt>
                            <dd class="faq__item-text">By purchasing Monte GTR you will get downloadable link for our
                                software.Please use Monte Programmer, in case you decide to program your chip to a
                                different car or update your Monte OS.</dd>
                        </div>
                        <div class="faq__item">
                            <dt class="h3 faq__item-title">Is it compatible with my car?</dt>
                            <dd class="faq__item-text">Monte GTR, is compatible with almost all engines and fuel types,
                                except BEV and FCEV vehicles. Please contact our customer support in case your car is
                                not listed.</dd>
                        </div>
                        <div class="faq__item">
                            <dt class="h3 faq__item-title">What OS does the Monte Programmer support?</dt>
                            <dd class="faq__item-text">The Monte Programmer is compatible only with PC (windows 10) If
                                you have a different operating system please contact us so we could program your unit
                                before shipping.</dd>
                        </div>
                    </dl>
                    <div class="faq__footnote"><span style="font-family: Arial; font-size: 14pt;">*Real world gains may
                            be less or more depending on a large number of contributing factors&nbsp;</span>
                        <font face="Arial"><span style="font-size: 18.6667px;">such as: displacement, aspiration and
                                selected tuning mode.&nbsp;</span></font>
                    </div>
                </div>
            </section>
            <section class="section support">
                <div class="container">
                    <div class="support__banner">
                        <picture class="responsive-media support__img-wrap">
                            <source
                                srcset="https://i.ibb.co/YdWBmR7/support-desktop.jpg, https://i.ibb.co/HxYwnV4/support-desktop-2.jpg 2x">
                            <img src="https://i.ibb.co/YdWBmR7/support-desktop.jpg" alt="alt">
                        </picture>
                        <div class="support__title">If you need more help, please contact us.</div>
                    </div>
                </div>
            </section>
            <section class="section footer">
                <div class="container">
                    <div class="footer-list">
                        <div class="div footer-list__item"><svg width="40" height="37">
                                <use xlink:href="#icon-protect"></use>
                            </svg>
                            <p><span>Lifetime warranty<br></span>lifetime warranty on any manufacturing defects.</p>
                        </div>
                        <div class="div footer-list__item"><svg width="40" height="37">
                                <use xlink:href="#icon-return"></use>
                            </svg>
                            <p><span>100% return policy<br></span>100% return policy. No questions asked.</p>
                        </div>
                        <div class="div footer-list__item"><svg width="40" height="37">
                                <use xlink:href="#icon-return2"></use>
                            </svg>
                            <p><span>Free shipping and free return<br></span>2-3 business days. Free shipping and free
                                return.</p>
                        </div>
                        <div class="div footer-list__item"><svg width="40" height="37">
                                <use xlink:href="#icon-medal"></use>
                            </svg>
                            <p><span>Buy from the manufacturer<br></span>Order your GTR from official Monte tuning eBay
                                store</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="visually-hidden">

        <!--?xml version="1.0" encoding="utf-8"?--><svg xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol fill="none" viewBox="0 0 33 223" id="icon-arrow-flat" xmlns="http://www.w3.org/2000/svg">
                <path opacity=".2" d="M1 1l31 110.75L1 222.5" stroke="#222"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 193 138" id="icon-balance1" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M181.982 119.5a88.639 88.639 0 003.018-23C185 47.623 145.377 8 96.5 8S8 47.623 8 96.5c0 7.955 1.05 15.666 3.018 23"
                    stroke="#ECF0F3" stroke-width="15" stroke-linecap="round"></path>
                <path
                    d="M12.425 124.211A88.414 88.414 0 018 96.5C8 47.623 47.623 8 96.5 8c37.161 0 68.972 22.903 82.088 55.364"
                    stroke="url(#abpaint0_linear)" stroke-width="15" stroke-linecap="round"></path>
                <path opacity=".6"
                    d="M163.382 118.314a70.568 70.568 0 004.836-25.751c0-39.45-32.338-71.43-72.23-71.43-39.89 0-72.228 31.98-72.228 71.43a70.562 70.562 0 004.836 25.751"
                    stroke="#ECF0F3" stroke-width="2" stroke-linecap="round"></path>
                <defs>
                    <linearGradient id="abpaint0_linear" x1="51.132" y1="118.884" x2="67.753" y2="-35.975"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#C8FDFD"></stop>
                        <stop offset="1" stop-color="#FF002D"></stop>
                    </linearGradient>
                </defs>
            </symbol>
            <symbol fill="none" viewBox="0 0 165 112" id="icon-balance1_1" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M156.373 106A77.452 77.452 0 00160 82.5C160 39.698 125.302 5 82.5 5S5 39.698 5 82.5A77.458 77.458 0 008.627 106"
                    stroke="#ECF0F3" stroke-width="10" stroke-linecap="round"></path>
                <path
                    d="M8.627 106A77.458 77.458 0 015 82.5C5 39.698 39.698 5 82.5 5c31.391 0 58.424 18.664 70.606 45.5"
                    stroke="url(#acpaint0_linear)" stroke-width="10" stroke-linecap="round"></path>
                <path opacity=".6"
                    d="M145.888 104A66.972 66.972 0 00149 83.757C149 46.888 119.227 17 82.5 17 45.773 17 16 46.888 16 83.757c0 7.057 1.09 13.858 3.112 20.243"
                    stroke="#ECF0F3" stroke-width="2" stroke-linecap="round"></path>
                <defs>
                    <linearGradient id="acpaint0_linear" x1="80.543" y1="101.37" x2="87.773" y2="-34.384"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#C8FDFD"></stop>
                        <stop offset="1" stop-color="#FF002D"></stop>
                    </linearGradient>
                </defs>
            </symbol>
            <symbol fill="none" viewBox="0 0 193 138" id="icon-balance2" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M181.982 119.5a88.639 88.639 0 003.018-23C185 47.623 145.377 8 96.5 8S8 47.623 8 96.5c0 7.955 1.05 15.666 3.018 23"
                    stroke="#ECF0F3" stroke-width="15" stroke-linecap="round"></path>
                <path
                    d="M12.425 124.211A88.414 88.414 0 018 96.5C8 47.623 47.623 8 96.5 8c37.161 0 68.972 22.903 82.088 55.364"
                    stroke="url(#adpaint0_linear)" stroke-width="15" stroke-linecap="round"></path>
                <path opacity=".6"
                    d="M163.382 118.314a70.568 70.568 0 004.836-25.751c0-39.45-32.338-71.43-72.23-71.43-39.89 0-72.228 31.98-72.228 71.43a70.562 70.562 0 004.836 25.751"
                    stroke="#ECF0F3" stroke-width="2" stroke-linecap="round"></path>
                <defs>
                    <linearGradient id="adpaint0_linear" x1="51.132" y1="118.884" x2="67.753" y2="-35.975"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#C8FDFD"></stop>
                        <stop offset="1" stop-color="#FF002D"></stop>
                    </linearGradient>
                </defs>
            </symbol>
            <symbol fill="none" viewBox="0 0 165 112" id="icon-balance2_2" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M156.373 106A77.452 77.452 0 00160 82.5C160 39.698 125.302 5 82.5 5S5 39.698 5 82.5A77.458 77.458 0 008.627 106"
                    stroke="#ECF0F3" stroke-width="10" stroke-linecap="round"></path>
                <path
                    d="M8.627 106A77.458 77.458 0 015 82.5C5 39.698 39.698 5 82.5 5c31.391 0 58.424 18.664 70.606 45.5"
                    stroke="url(#aepaint0_linear)" stroke-width="10" stroke-linecap="round"></path>
                <path opacity=".6"
                    d="M145.888 104A66.972 66.972 0 00149 83.757C149 46.888 119.227 17 82.5 17 45.773 17 16 46.888 16 83.757c0 7.057 1.09 13.858 3.112 20.243"
                    stroke="#ECF0F3" stroke-width="2" stroke-linecap="round"></path>
                <defs>
                    <linearGradient id="aepaint0_linear" x1="80.543" y1="101.37" x2="87.773" y2="-34.384"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#C8FDFD"></stop>
                        <stop offset="1" stop-color="#FF002D"></stop>
                    </linearGradient>
                </defs>
            </symbol>
            <symbol fill="none" viewBox="0 0 193 132" id="icon-balance3" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M181.982 119.5a88.639 88.639 0 003.018-23C185 47.623 145.377 8 96.5 8S8 47.623 8 96.5c0 7.955 1.05 15.666 3.018 23"
                    stroke="#ECF0F3" stroke-width="15" stroke-linecap="round"></path>
                <path d="M96.5 8C47.623 8 8 47.623 8 96.5a88.414 88.414 0 004.425 27.711" stroke="url(#afpaint0_linear)"
                    stroke-width="15" stroke-linecap="round"></path>
                <path opacity=".6"
                    d="M163.382 118.314a70.568 70.568 0 004.836-25.751c0-39.45-32.338-71.43-72.23-71.43-39.89 0-72.228 31.98-72.228 71.43a70.562 70.562 0 004.836 25.751"
                    stroke="#ECF0F3" stroke-width="2" stroke-linecap="round"></path>
                <defs>
                    <linearGradient id="afpaint0_linear" x1="51.132" y1="118.884" x2="67.753" y2="-35.975"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#C8FDFD"></stop>
                        <stop offset="1" stop-color="#FF002D"></stop>
                    </linearGradient>
                </defs>
            </symbol>
            <symbol fill="none" viewBox="0 0 165 112" id="icon-balance3_3" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M156.373 106A77.452 77.452 0 00160 82.5C160 39.698 125.302 5 82.5 5S5 39.698 5 82.5A77.458 77.458 0 008.627 106"
                    stroke="#ECF0F3" stroke-width="10" stroke-linecap="round"></path>
                <path d="M82.5 5C39.698 5 5 39.698 5 82.5A77.458 77.458 0 008.627 106" stroke="url(#agpaint0_linear)"
                    stroke-width="10" stroke-linecap="round"></path>
                <path opacity=".6"
                    d="M145.888 104A66.972 66.972 0 00149 83.757C149 46.888 119.227 17 82.5 17 45.773 17 16 46.888 16 83.757c0 7.057 1.09 13.858 3.112 20.243"
                    stroke="#ECF0F3" stroke-width="2" stroke-linecap="round"></path>
                <defs>
                    <linearGradient id="agpaint0_linear" x1="80.543" y1="101.37" x2="87.773" y2="-34.384"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#C8FDFD"></stop>
                        <stop offset="1" stop-color="#FF002D"></stop>
                    </linearGradient>
                </defs>
            </symbol>
            <symbol fill="none" viewBox="0 0 193 138" id="icon-balance4" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M181.982 119.5a88.639 88.639 0 003.018-23C185 47.623 145.377 8 96.5 8S8 47.623 8 96.5c0 7.955 1.05 15.666 3.018 23"
                    stroke="#ECF0F3" stroke-width="15" stroke-linecap="round"></path>
                <path d="M12.425 124.211A88.414 88.414 0 018 96.5c0-11.717 2.277-22.901 6.412-33.136"
                    stroke="url(#ahpaint0_linear)" stroke-width="15" stroke-linecap="round"></path>
                <path opacity=".6"
                    d="M163.382 118.314a70.568 70.568 0 004.836-25.751c0-39.45-32.338-71.43-72.23-71.43-39.89 0-72.228 31.98-72.228 71.43a70.562 70.562 0 004.836 25.751"
                    stroke="#ECF0F3" stroke-width="2" stroke-linecap="round"></path>
                <defs>
                    <linearGradient id="ahpaint0_linear" x1="51.132" y1="118.884" x2="67.753" y2="-35.974"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#C8FDFD"></stop>
                        <stop offset="1" stop-color="#FF002D"></stop>
                    </linearGradient>
                </defs>
            </symbol>
            <symbol fill="none" viewBox="0 0 165 112" id="icon-balance4_4" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M156.373 106A77.452 77.452 0 00160 82.5C160 39.698 125.302 5 82.5 5S5 39.698 5 82.5A77.458 77.458 0 008.627 106"
                    stroke="#ECF0F3" stroke-width="10" stroke-linecap="round"></path>
                <path d="M8.627 106A77.46 77.46 0 015 82.5c0-12.328 2.878-23.984 8-34.332"
                    stroke="url(#aipaint0_linear)" stroke-width="10" stroke-linecap="round"></path>
                <path opacity=".6"
                    d="M145.888 104A66.972 66.972 0 00149 83.757C149 46.888 119.227 17 82.5 17 45.773 17 16 46.888 16 83.757c0 7.057 1.09 13.858 3.112 20.243"
                    stroke="#ECF0F3" stroke-width="2" stroke-linecap="round"></path>
                <defs>
                    <linearGradient id="aipaint0_linear" x1="80.543" y1="101.369" x2="87.773" y2="-34.384"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#C8FDFD"></stop>
                        <stop offset="1" stop-color="#FF002D"></stop>
                    </linearGradient>
                </defs>
            </symbol>
            <symbol fill="none" viewBox="0 0 51 30" id="icon-battery" xmlns="http://www.w3.org/2000/svg">
                <rect width="45" height="27" x="1.5" y="1.5" stroke="#000" stroke-width="3" rx="2.5"></rect>
                <path fill="#000" d="M48 9h3v13h-3z"></path>
                <path fill="#000" fill-rule="evenodd" d="M25.2 14.2V7L18 16.6h4.8v7.2l7.2-9.6h-4.8z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 100 56" id="icon-car" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M22.515 4.753a11 11 0 018.142-3.605h39.154a11 11 0 018.143 3.605l13.31 14.655a11 11 0 012.805 8.464l-1.818 18.637H8.218L6.399 27.872a11 11 0 012.805-8.464l13.31-14.655z"
                    stroke="#222" stroke-width="2"></path>
                <path
                    d="M26.601 10.868l-4.382 4.806c-.585.643-.13 1.674.74 1.674h54.547c.87 0 1.325-1.031.74-1.673l-4.382-4.807M8.383 46.508h18.872v4.1a4 4 0 01-4 4H12.383a4 4 0 01-4-4v-4.1zM73.205 46.508h18.872v4.1a4 4 0 01-4 4H77.205a4 4 0 01-4-4v-4.1zM16.484 25.705a1 1 0 011.164-.885l17.229 2.958a1 1 0 01.778.666l1.005 2.975a1 1 0 01-.948 1.32H16.878a1 1 0 01-.995-1.1l.601-5.934zM83.98 25.704a1 1 0 00-1.163-.884l-17.229 2.958a1 1 0 00-.778.665l-1.005 2.976a1 1 0 00.948 1.32h18.834a1 1 0 00.995-1.101l-.601-5.934z"
                    stroke="#222" stroke-width="2"></path>
                <rect x="3.284" y="54.062" width="93.47" height=".905" rx=".452" fill="#fff" stroke="#222"
                    stroke-width=".905"></rect>
                <path
                    d="M16.59 12.083H2.677a1 1 0 00-.88 1.476L4 17.634a1 1 0 00.88.524h5.967M83.87 12.084h13.914a1 1 0 01.88 1.475l-2.202 4.075a1 1 0 01-.88.525h-5.967"
                    stroke="#222" stroke-width="2"></path>
            </symbol>
            <symbol viewBox="0 0 24 24" id="icon-checkmark" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                    d="M19.716 4.386a1 1 0 011.572 1.236L10.665 19.136a1.5 1.5 0 01-2.324.042l-5.104-6.032a1 1 0 111.526-1.292l4.708 5.564L19.716 4.386z">
                </path>
            </symbol>
            <symbol fill="none" viewBox="0 0 96 69" id="icon-cloud" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M63.111 59.146h14.881c9.38 0 17.007-7.634 17.007-16.684 0-5.934-3.355-11.331-8.594-14.212-.997-10.421-10.11-18.61-21.168-18.61-3.193 0-6.286.693-9.13 2.035C51.365 5.34 43.687 1.434 35.475 1.434c-14.067 0-25.51 11.042-25.51 24.617 0 .717.037 1.442.116 2.183-5.273 2.853-8.62 8.205-8.62 14.227 0 9.051 7.627 16.685 17.007 16.685h14.881"
                    stroke="#222" stroke-width="2"></path>
                <path
                    d="M45.613 67.501h4.677c1.293 0 2.339-1.1 2.339-2.461V52.567h3.507c.864 0 1.656-.5 2.063-1.3.406-.8.36-1.772-.117-2.527l-8.185-14.77a2.31 2.31 0 00-1.945-1.096 2.31 2.31 0 00-1.946 1.096L37.82 48.74a2.576 2.576 0 00-.117 2.527c.407.8 1.2 1.3 2.062 1.3h3.508V65.04c0 1.36 1.046 2.461 2.339 2.461z"
                    stroke="#222" stroke-width="2"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 52 31" id="icon-connector" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.957 11.722C2.866 6.447 6.894 1.5 12.281 1.5h27.438c5.387 0 9.415 4.947 8.324 10.222l-2.23 10.776a8.5 8.5 0 01-8.323 6.777H14.51a8.5 8.5 0 01-8.324-6.777L3.957 11.722z"
                    stroke="#222" stroke-width="3"></path>
                <rect x="10.611" y="14.261" width="30.776" height="3.184" rx="1.592" fill="#222"></rect>
                <circle cx="13.264" cy="9.486" r="1.592" fill="#222"></circle>
                <circle cx="19.631" cy="9.486" r="1.592" fill="#222"></circle>
                <circle cx="26.002" cy="9.486" r="1.592" fill="#222"></circle>
                <circle cx="32.367" cy="9.486" r="1.592" fill="#222"></circle>
                <circle cx="38.734" cy="9.486" r="1.592" fill="#222"></circle>
                <circle cx="16.447" cy="23.282" r="1.592" fill="#222"></circle>
                <circle cx="22.814" cy="23.282" r="1.592" fill="#222"></circle>
                <circle cx="29.18" cy="23.282" r="1.592" fill="#222"></circle>
                <circle cx="35.551" cy="23.282" r="1.592" fill="#222"></circle>
            </symbol>
            <symbol fill="none" viewBox="0 0 28 28" id="icon-energy" xmlns="http://www.w3.org/2000/svg">
                <rect x="1" y="1" width="26" height="26" rx="13" stroke="#222" stroke-width="2"></rect>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 13.75V6L7 13.753h4.435v7.75l8.85-7.752H15.85z"
                    fill="#222"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 33 40" id="icon-fuel" xmlns="http://www.w3.org/2000/svg">
                <path stroke="#222" stroke-width="3"
                    d="M1.5 8.103a2.5 2.5 0 012.5-2.5h11.901a2.5 2.5 0 011.672.641l12.92 11.628a2.5 2.5 0 01.828 1.858V36a2.5 2.5 0 01-2.5 2.5H4A2.5 2.5 0 011.5 36V8.103z">
                </path>
                <path stroke="#222" stroke-width="3"
                    d="M31.32 8.103a2.5 2.5 0 00-2.5-2.5H4a2.5 2.5 0 00-2.5 2.5V36A2.5 2.5 0 004 38.5h24.82a2.5 2.5 0 002.5-2.5V8.103z">
                </path>
                <rect width="10.256" height="3.077" x="4.103" fill="#222" rx="1.538"></rect>
                <path fill="#222" d="M19.619 20.644a4.165 4.165 0 11-5.89 0l2.945-2.945 2.945 2.945z"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 80 76" id="icon-graph" xmlns="http://www.w3.org/2000/svg">
                <path d="M72.5 53.998c-1.5-.166-4.709-1.568-7.5-3.5-6.5-4.498-15-8.363-26-2.5-7.5 3.998-21 22.5-29 19.5"
                    stroke="#000" stroke-width="4" stroke-linecap="round"></path>
                <path
                    d="M30 55.498c3-3.833 8.304-9.5 13-23 4-11.5 9.553-15.205 15.5-16 7.5-1.001 10.667 2.334 14.5 5M7.5 7v66.5m-5-6H76"
                    stroke="#000" stroke-width="4" stroke-linecap="round"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2 39a2 2 0 012-2h5a2 2 0 110 4H4a2 2 0 01-2-2zm16 0a2 2 0 012-2h5a2 2 0 110 4h-5a2 2 0 01-2-2zm18-2a2 2 0 100 4h5a2 2 0 100-4h-5zm14 2a2 2 0 012-2h5a2 2 0 110 4h-5a2 2 0 01-2-2zm18-2a2 2 0 100 4h5a2 2 0 100-4h-5z"
                    fill="#000"></path>
                <path d="M12.015 7.985L7.5 2.5 2.985 7.985M72.015 72.015L77.5 67.5l-5.485-4.515" stroke="#000"
                    stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 99 48" id="icon-infinity" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M90.386 39.554c-2.701 2.492-6.01 4.368-9.66 5.467a27.8 27.8 0 01-7.846 1.15 26.118 26.118 0 01-10.85-2.406c-3.363-1.562-6.28-3.817-8.524-6.582 0 0 0 0 0 0l-3.573-4.423-.77-.954-.78.948-3.636 4.424-.004.005c-3.038 3.752-7.293 6.54-12.17 7.953a26.345 26.345 0 01-14.97-.104c-4.853-1.481-9.061-4.328-12.036-8.121C2.593 33.119 1 28.573 1 23.917c0-4.655 1.593-9.202 4.567-12.994 2.975-3.793 7.183-6.64 12.036-8.12a26.345 26.345 0 0114.97-.105c4.877 1.413 9.132 4.201 12.17 7.953l.004.006 3.636 4.424.78.948.77-.955 3.574-4.424.004-.004c2.261-2.833 5.224-5.141 8.65-6.73a26.13 26.13 0 0111.062-2.401 26.11 26.11 0 0111.043 2.473c3.414 1.611 6.358 3.938 8.598 6.786 2.239 2.846 3.711 6.133 4.303 9.59a20.543 20.543 0 01-.887 10.328c-1.175 3.332-3.192 6.37-5.894 8.862zM56.08 23.288l-.508.63.508.628 5.73 7.088c1.754 2.18 4.2 3.783 6.982 4.596 2.782.812 5.769.796 8.54-.046 2.772-.842 5.199-2.471 6.926-4.67 1.73-2.202 2.668-4.86 2.668-7.597s-.939-5.395-2.668-7.596c-1.727-2.2-4.154-3.829-6.926-4.671a15.006 15.006 0 00-8.54-.045c-2.781.812-5.228 2.415-6.983 4.596l-5.729 7.087zM42.228 24.55l.517-.633-.517-.633-5.782-7.076c-1.251-1.635-2.909-2.957-4.825-3.86a14.2 14.2 0 00-6.192-1.341 15.433 15.433 0 00-4.54.667 14.16 14.16 0 00-5.508 3.142 12.784 12.784 0 00-3.394 5.137 12.007 12.007 0 00-.504 6.027 12.419 12.419 0 002.504 5.57 13.71 13.71 0 004.931 3.891 14.852 14.852 0 006.274 1.407 14.863 14.863 0 006.285-1.36 13.734 13.734 0 004.961-3.852l.004-.004 5.786-7.082z"
                    stroke="#222" stroke-width="2"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 36 18" id="icon-infinity2" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M26.646 18a9.481 9.481 0 01-4.12-.964 9.2 9.2 0 01-3.247-2.646l-1.306-1.707-1.33 1.707a9.236 9.236 0 01-4.632 3.196 9.497 9.497 0 01-5.682-.042 9.225 9.225 0 01-4.581-3.264A8.798 8.798 0 010 9.029c0-1.886.611-3.723 1.748-5.251A9.225 9.225 0 016.329.513a9.497 9.497 0 015.682-.041 9.236 9.236 0 014.632 3.196l1.33 1.707 1.306-1.707A9.197 9.197 0 0122.574.962a9.484 9.484 0 014.2-.962 9.482 9.482 0 014.192.99 9.19 9.19 0 013.275 2.73 8.856 8.856 0 011.646 3.873c.227 1.4.11 2.83-.34 4.178a8.953 8.953 0 01-2.252 3.574 9.308 9.308 0 01-3.675 2.196c-.96.301-1.964.456-2.974.459zM20.79 9.029l2.095 2.735a4.73 4.73 0 002.37 1.645 4.864 4.864 0 002.914-.017 4.725 4.725 0 002.351-1.671 4.506 4.506 0 00.898-2.692c0-.967-.314-1.91-.898-2.693a4.725 4.725 0 00-2.35-1.67 4.864 4.864 0 00-2.914-.017 4.73 4.73 0 00-2.371 1.645l-2.095 2.735zM9.299 4.434a5.021 5.021 0 00-1.555.24A4.755 4.755 0 005.872 5.8a4.574 4.574 0 00-1.144 1.827 4.469 4.469 0 00-.17 2.132c.118.714.406 1.39.843 1.976a4.696 4.696 0 001.672 1.39 4.846 4.846 0 004.282.017 4.699 4.699 0 001.684-1.378l2.117-2.735-2.117-2.735a4.47 4.47 0 00-1.633-1.38 4.616 4.616 0 00-2.107-.48z"
                    fill="#222"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 185 29" id="icon-logo" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M68.132 10.328v3.803a4.453 4.453 0 001.25 3.108 4.234 4.234 0 003.028 1.292h2.024v4.134h-2.016a8.178 8.178 0 01-5.113-1.81 8.541 8.541 0 01-2.944-4.652 8.041 8.041 0 01-.256-2.067V0h4.027v6.195h6.302v4.133h-6.302zm19.188 5.793l-1.425 1.46a4.655 4.655 0 01-.745.593l-.23.14c-.252.152-.52.276-.797.371-.208.068-.42.12-.636.154h-.026c-.217.039-.437.057-.657.054h-.102a3.47 3.47 0 01-.56-.045 3.632 3.632 0 01-.643-.154l1.323-1.357 2.849-2.92 1.292-1.357L90 9.958a7.625 7.625 0 00-1.248-1.642 7.91 7.91 0 00-1.614-1.284 8.172 8.172 0 00-4.322-1.24c-1.524 0-3.019.429-4.322 1.24a8.6 8.6 0 00-1.226.904l-.375.371c-.176.18-.335.357-.498.552-.035.041-.067.084-.098.127a3.76 3.76 0 01-.06.08l-.054.073a6.247 6.247 0 00-.529.819 8.511 8.511 0 00-.564 1.148c-.048.101-.09.206-.124.312a.679.679 0 00-.092.262l-.084.294a8.655 8.655 0 00-.287 1.457c-.01.055-.017.11-.022.167a7.608 7.608 0 000 1.573c.005.057.012.112.022.168.054.493.15.98.287 1.456l.084.294a.68.68 0 00.092.262c.035.107.076.21.124.312.149.41.329.808.538 1.19.155.286.332.56.529.818l.057.072c.027.034.052.07.077.104.026.035.051.07.078.104.163.195.322.371.498.552.187.195.384.379.59.552.062.047.121.099.177.153.177.136.349.263.538.385.094.072.192.137.296.194l.106.055c.128.09.264.168.405.235.057.033.111.056.167.079l.107.047c.092.046.282.136.44.195h.027c.23.108.47.195.715.262h.083l.208.054.233.064.19.04c.145.04.292.067.441.082l.203.027.225.027a7.403 7.403 0 001.724-.023l.397-.059c.107 0 .21-.023.32-.048l.024-.006a.8.8 0 00.177-.04c.048 0 .096-.017.144-.034.027-.01.054-.019.08-.025l.221-.059h.08c.244-.067.483-.154.714-.262h.022c.094-.038.187-.08.282-.124l.159-.07c.056-.026.095-.042.127-.055.055-.023.088-.036.146-.068.143-.066.28-.145.41-.235l.097-.054c.104-.057.203-.122.296-.195a7.78 7.78 0 00.538-.384c.056-.055.115-.106.176-.154a7.42 7.42 0 00.591-.552l1.425-1.46-2.85-2.926zm-7.37-1.696l-1.322 1.357a4.765 4.765 0 010-2.677c.099-.316.233-.62.4-.905l.076-.117a4.318 4.318 0 012.64-1.964 4.241 4.241 0 012.335.074l-1.293 1.356-2.835 2.876zm-42.133-8.61a8.248 8.248 0 00-5.17 1.83 8.615 8.615 0 00-2.967 4.71 8.5 8.5 0 000 4.137 8.615 8.615 0 002.966 4.716 8.248 8.248 0 005.173 1.833 8.247 8.247 0 005.173-1.833 8.615 8.615 0 002.966-4.716c.34-1.357.34-2.78 0-4.138a8.615 8.615 0 00-2.97-4.71 8.248 8.248 0 00-5.171-1.828zm0 13.078a4.28 4.28 0 01-2.421-.753 4.445 4.445 0 01-1.605-2.005 4.573 4.573 0 01-.248-2.581 4.504 4.504 0 011.193-2.288 4.325 4.325 0 012.23-1.222 4.257 4.257 0 012.518.254c.796.338 1.477.91 1.956 1.645a4.568 4.568 0 01.403 4.192 4.478 4.478 0 01-.945 1.45 4.35 4.35 0 01-1.414.968 4.265 4.265 0 01-1.667.34zM20.555 5.825a7.998 7.998 0 00-3.394.758 8.188 8.188 0 00-2.78 2.136 8.173 8.173 0 00-3.675-2.485 7.991 7.991 0 00-4.398-.174 8.131 8.131 0 00-3.85 2.188 8.446 8.446 0 00-2.189 3.916A8.066 8.066 0 000 14.231v8.43h4.03v-8.435a4.33 4.33 0 011.26-2.939 4.119 4.119 0 012.898-1.214 4.118 4.118 0 012.905 1.195A4.327 4.327 0 0112.37 14.2v8.466h4.031V14.227c0-1.133.439-2.22 1.22-3.02a4.114 4.114 0 012.946-1.252c1.104 0 2.164.45 2.945 1.251a4.327 4.327 0 011.22 3.02v8.43h4.03v-8.43a8.06 8.06 0 00-.255-2.066 8.417 8.417 0 00-2.914-4.569 8.06 8.06 0 00-5.038-1.766zm29.701 1.767a8.056 8.056 0 0110.076.003 8.43 8.43 0 012.918 4.579c.178.673.269 1.368.269 2.066v8.416h-4.03V14.24c0-1.14-.442-2.232-1.228-3.038a4.137 4.137 0 00-2.963-1.258 4.138 4.138 0 00-2.962 1.258 4.352 4.352 0 00-1.227 3.038v8.397h-4.03v-8.415c0-.698.09-1.393.268-2.067a8.412 8.412 0 012.91-4.563z"
                    fill="url(#atpaint0_linear)"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M144.433 3.047a1.864 1.864 0 001.028 1.007c.233.093.481.137.73.129.251.008.5-.037.733-.132a1.83 1.83 0 00.621-.42 1.867 1.867 0 00.538-1.357 1.751 1.751 0 00-.132-.708 1.71 1.71 0 00-.406-.59 1.864 1.864 0 00-1.354-.52 1.793 1.793 0 00-.732.133 1.833 1.833 0 00-.622.42 1.845 1.845 0 00-.538 1.325c-.004.244.042.487.134.713zm3.152 4.18h-2.792v15.826h2.792V7.226zm-42.628 15.7a4.14 4.14 0 001.513-.819l-.874-2.057a3.31 3.31 0 01-2.183.746c-.328.02-.657-.03-.965-.15a2.322 2.322 0 01-.821-.542 2.825 2.825 0 01-.626-1.967v-8.56h4.41V7.222h-4.41v-3.46H98.21v3.46h-2.62v2.356h2.62v8.682c0 1.589.426 2.811 1.278 3.667.853.857 2.055 1.285 3.608 1.285.631 0 1.258-.096 1.861-.285zm17.468.122V7.22h-2.752v8.185c0 1.683-.426 2.976-1.279 3.88a4.584 4.584 0 01-1.606 1.058 4.5 4.5 0 01-1.887.299c-1.34-.003-2.369-.396-3.087-1.18-.717-.784-1.076-1.942-1.076-3.473V7.22h-2.791v9.112c0 2.268.588 3.983 1.764 5.147 1.176 1.163 2.793 1.745 4.851 1.745a6.796 6.796 0 003.012-.67 5.65 5.65 0 002.205-1.894v2.388h2.646zM138.9 8.742c1.152 1.164 1.728 2.869 1.728 5.115v9.098h-2.774v-8.746c0-1.531-.358-2.684-1.076-3.459-.717-.775-1.746-1.162-3.087-1.162a4.697 4.697 0 00-1.925.299 4.785 4.785 0 00-1.651 1.057c-.882.905-1.323 2.203-1.323 3.894v8.14H126V7.15h2.677v2.388a5.457 5.457 0 012.284-1.881A7.814 7.814 0 01134.234 7c1.955-.003 3.51.578 4.666 1.741zm25.563.076c1.152 1.164 1.728 2.869 1.728 5.114v9.099h-2.8v-8.746c0-1.531-.359-2.684-1.076-3.46-.718-.774-1.747-1.161-3.087-1.161a4.697 4.697 0 00-1.925.299 4.79 4.79 0 00-1.652 1.057c-.882.905-1.323 2.203-1.323 3.894v8.14h-2.792V7.225h2.677v2.388a5.46 5.46 0 012.285-1.881 7.81 7.81 0 013.272-.656c1.973-.003 3.537.577 4.693 1.741zm20.538 12.065V7.222l-.036-.005h-2.646v2.446a6.042 6.042 0 00-2.456-1.94 8.002 8.002 0 00-3.241-.655 8.357 8.357 0 00-4 .954 7.018 7.018 0 00-2.81 2.713 8.303 8.303 0 00-1.014 3.982c0 1.394.349 2.765 1.014 3.981a7.112 7.112 0 002.81 2.714 8.253 8.253 0 004 .968 7.91 7.91 0 003.126-.611 6.182 6.182 0 002.43-1.836v1.253c0 1.79-.432 3.123-1.296 3.997-.865.874-2.198 1.311-4 1.311a9.89 9.89 0 01-3.273-.551 7.847 7.847 0 01-2.646-1.506l-1.323 2.207a8.183 8.183 0 003.202 1.745c1.35.412 2.751.617 4.159.61 2.658 0 4.655-.661 5.993-1.984 1.338-1.324 2.007-3.368 2.007-6.132zm-3.4-3.505a4.793 4.793 0 01-1.892 1.836h-.031a5.62 5.62 0 01-2.686.656 5.661 5.661 0 01-2.748-.656 4.78 4.78 0 01-1.891-1.836 5.213 5.213 0 01-.684-2.668 4.963 4.963 0 01.348-2.021 4.845 4.845 0 011.134-1.691 5.899 5.899 0 013.826-1.417c1.397 0 2.75.501 3.825 1.417.492.474.878 1.05 1.134 1.69.256.641.374 1.33.348 2.022a5.232 5.232 0 01-.683 2.668z"
                    fill="#222"></path>
                <defs>
                    <linearGradient id="atpaint0_linear" x1="111.943" y1="23.041" x2="-71.213" y2="23.041"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF5823"></stop>
                        <stop offset="1" stop-color="#FF36C7"></stop>
                    </linearGradient>
                </defs>
            </symbol>
            <symbol fill="none" viewBox="0 0 24 25" id="icon-manometer" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12.479" r="11" stroke="#222" stroke-width="2"></circle>
                <mask id="aua" fill="#fff">
                    <path fill-rule="evenodd"
                        d="M3.483 20.557a11.967 11.967 0 018.778-3.817c3.465 0 6.587 1.468 8.777 3.817a11.967 11.967 0 01-8.777 3.818 11.967 11.967 0 01-8.778-3.818z"
                        clip-rule="evenodd"></path>
                </mask>
                <path fill="#222"
                    d="M3.483 20.557L2.02 19.193.748 20.557l1.273 1.364 1.462-1.364zm17.555 0l1.463 1.364 1.272-1.364-1.272-1.364-1.463 1.364zM4.947 21.92a9.967 9.967 0 017.315-3.181v-4a13.967 13.967 0 00-10.24 4.453l2.925 2.728zm7.315-3.181a9.967 9.967 0 017.315 3.181l2.925-2.728a13.967 13.967 0 00-10.24-4.454v4zm7.315.453a9.967 9.967 0 01-7.315 3.181v4c4.042 0 7.687-1.715 10.24-4.453l-2.925-2.728zm-7.315 3.181a9.967 9.967 0 01-7.315-3.18L2.02 21.92a13.967 13.967 0 0010.24 4.454v-4z"
                    mask="url(#aua)"></path>
                <path stroke="#222" stroke-width="2"
                    d="M12.847 13.583a1.214 1.214 0 01-1.8-.83L10.42 9.37l2.611 2.24a1.214 1.214 0 01-.184 1.973z">
                </path>
                <rect width="2.727" height="1.091" x="12.545" y=".479" fill="#222" rx=".545"
                    transform="rotate(90 12.545 .48)"></rect>
                <rect width="2.727" height="1.091" x="3.9" y="3.607" fill="#222" rx=".545"
                    transform="rotate(45 3.9 3.607)"></rect>
                <rect width="2.727" height="1.091" x="20.871" y="4.381" fill="#222" rx=".545"
                    transform="rotate(135 20.87 4.381)"></rect>
                <rect width="2.727" height="1.091" x="24" y="13.024" fill="#222" rx=".545"
                    transform="rotate(-180 24 13.024)"></rect>
                <rect width="2.727" height="1.091" x="2.727" y="13.024" fill="#222" rx=".545"
                    transform="rotate(-180 2.727 13.024)"></rect>
            </symbol>
            <symbol fill="none" viewBox="0 0 40 38" id="icon-medal" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.28 14.13a.5.5 0 01.5-.5h17.417a.5.5 0 01.5.5v20.371a.5.5 0 01-.666.472l-7.378-2.604a3.5 3.5 0 00-2.33 0l-7.377 2.604a.5.5 0 01-.667-.471V14.13z"
                    fill="#F7F8FA" stroke="#000" stroke-width="3"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M20.495 29.783c8.005 0 14.495-6.49 14.495-14.495C34.99 7.283 28.5.793 20.495.793 12.49.793 6 7.283 6 15.288c0 8.006 6.49 14.495 14.495 14.495z"
                    fill="#F7F8FA"></path>
                <path
                    d="M33.49 15.288c0 7.177-5.818 12.995-12.995 12.995S7.5 22.465 7.5 15.288 13.318 2.293 20.495 2.293 33.49 8.111 33.49 15.288z"
                    fill="#F7F8FA" stroke="#000" stroke-width="3"></path>
                <path
                    d="M18.725 11.322l1.763-2.727 1.763 2.727a2.5 2.5 0 001.458 1.059l3.138.834-2.049 2.52a2.5 2.5 0 00-.556 1.713l.176 3.242-3.03-1.17a2.5 2.5 0 00-1.8 0l-3.03 1.17.177-3.242a2.5 2.5 0 00-.557-1.714l-2.049-2.52 3.139-.833a2.5 2.5 0 001.457-1.059z"
                    fill="#F7F8FA" stroke="#000" stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 50 38" id="icon-monitor" xmlns="http://www.w3.org/2000/svg">
                <rect width="47" height="35" x="1.5" y="1.5" stroke="#000" stroke-width="3" rx="4.5"></rect>
                <path fill="#000" d="M1 28h48v3H1z"></path>
                <rect width="5" height="2" x="22" y="32" fill="#000" rx="1"></rect>
                <path stroke="#000" stroke-width="3"
                    d="M7 21.5l2-2a4.95 4.95 0 017 0v0a4.95 4.95 0 007 0l5-5a4.95 4.95 0 017 0v0a4.95 4.95 0 007 0l1-1">
                </path>
            </symbol>
            <symbol fill="none" viewBox="0 0 38 30" id="icon-monitor-filled" xmlns="http://www.w3.org/2000/svg">
                <rect width="35" height="25.88" x="1.5" y="2.495" stroke="#222" stroke-width="3" rx="2.5"></rect>
                <path fill="#222" d="M0 21.995h38v4a4 4 0 01-4 4H4a4 4 0 01-4-4v-4z"></path>
                <rect width="4" height="4" x="17" y="23.995" fill="#fff" rx="2"></rect>
            </symbol>
            <symbol fill="none" viewBox="0 0 52 40" id="icon-motor" xmlns="http://www.w3.org/2000/svg">
                <path stroke="#222" stroke-width="3"
                    d="M6.906 29.875V16.062a3.3 3.3 0 013.299-3.3h1.87a4.429 4.429 0 004.429-4.428c0-.789.64-1.428 1.428-1.428h14.093c.789 0 1.428.64 1.428 1.428a4.429 4.429 0 004.429 4.429h9.01a3.5 3.5 0 013.5 3.5v7.48a3.225 3.225 0 01-3.226 3.225 6.225 6.225 0 00-5.626 3.562l-2.824 5.967a3.5 3.5 0 01-3.164 2.003h-13.67a3.451 3.451 0 01-3.024-1.786 6.452 6.452 0 00-5.65-3.34h-2.803a3.5 3.5 0 01-3.5-3.5z">
                </path>
                <rect width="19.459" height="3.243" x="15.138" fill="#222" rx="1.622"></rect>
                <rect width="19.459" height="3.243" x="3.243" y="14.055" fill="#222" rx="1.622"
                    transform="rotate(90 3.243 14.055)"></rect>
            </symbol>
            <symbol fill="none" viewBox="0 0 52 40" id="icon-motor-error" xmlns="http://www.w3.org/2000/svg">
                <path fill="#222" d="M27.887 12.29v10.586h-10.72l10.72-10.587z"></path>
                <path fill="#222" d="M24.591 33.46V22.872h10.72L24.59 33.459z"></path>
                <path stroke="#222" stroke-width="3"
                    d="M6.906 29.875V16.062a3.3 3.3 0 013.299-3.3h1.87a4.429 4.429 0 004.429-4.428c0-.789.64-1.428 1.428-1.428h14.093c.789 0 1.428.64 1.428 1.428a4.429 4.429 0 004.429 4.429h9.01a3.5 3.5 0 013.5 3.5v7.48a3.225 3.225 0 01-3.226 3.225 6.225 6.225 0 00-5.626 3.562l-2.824 5.967a3.5 3.5 0 01-3.164 2.003h-13.67a3.451 3.451 0 01-3.024-1.786 6.452 6.452 0 00-5.65-3.34h-2.803a3.5 3.5 0 01-3.5-3.5z">
                </path>
                <rect width="19.459" height="3.243" x="15.138" fill="#222" rx="1.622"></rect>
                <rect width="19.459" height="3.243" x="3.243" y="14.055" fill="#222" rx="1.622"
                    transform="rotate(90 3.243 14.055)"></rect>
            </symbol>
            <symbol fill="none" viewBox="0 0 36 29" id="icon-motor-filled" xmlns="http://www.w3.org/2000/svg">
                <path fill="#222"
                    d="M4 22.44V12.059a3 3 0 013-3h1.576c1.122 0 2.031-.91 2.031-2.032 0-1.122.91-2.032 2.032-2.032h9.67c1.122 0 2.031.91 2.031 2.032 0 1.122.91 2.032 2.032 2.032H33a3 3 0 013 3v5.936a3 3 0 01-3 3h-.406a3 3 0 00-2.716 1.725l-2.137 4.55a3 3 0 01-2.715 1.725h-9.919a3 3 0 01-2.632-1.561L12.238 27a3 3 0 00-2.632-1.561H7a3 3 0 01-3-3z">
                </path>
                <rect width="13.251" height="2.375" x="11.086" y=".995" fill="#222" rx="1.188"></rect>
                <rect width="14.251" height="2.375" x="2.375" y="10.288" fill="#222" rx="1.188"
                    transform="rotate(90 2.375 10.288)"></rect>
            </symbol>
            <symbol fill="none" viewBox="0 0 20 32" id="icon-phone" xmlns="http://www.w3.org/2000/svg">
                <path fill="#222" fill-rule="evenodd"
                    d="M0 2.995a2 2 0 012-2h16a2 2 0 012 2v27a2 2 0 01-2 2H2a2 2 0 01-2-2v-27zm2 1h16v21H2v-21zm8 26a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 31 32" id="icon-processor" xmlns="http://www.w3.org/2000/svg">
                <rect width="21" height="21" x="5" y="5.995" stroke="#222" stroke-width="3" rx="3"></rect>
                <rect width="5" height="5" x="12.999" y="13.995" stroke="#222" stroke-width="3" rx="2.5"></rect>
                <path fill="#222" fill-rule="evenodd"
                    d="M9.5.995a1.5 1.5 0 00-1.5 1.5v3a1.5 1.5 0 003 0v-3a1.5 1.5 0 00-1.5-1.5zm6 0a1.5 1.5 0 00-1.5 1.5v3a1.5 1.5 0 003 0v-3a1.5 1.5 0 00-1.5-1.5zm4.5 1.5a1.5 1.5 0 013 0v3a1.5 1.5 0 01-3 0v-3zm-10.5 23.5a1.5 1.5 0 00-1.5 1.5v3a1.5 1.5 0 003 0v-3a1.5 1.5 0 00-1.5-1.5zm4.5 1.5a1.5 1.5 0 013 0v3a1.5 1.5 0 01-3 0v-3zm7.5-1.5a1.5 1.5 0 00-1.5 1.5v3a1.5 1.5 0 003 0v-3a1.5 1.5 0 00-1.5-1.5zm9.5-15.5a1.5 1.5 0 00-1.5-1.5h-3a1.5 1.5 0 000 3h3a1.5 1.5 0 001.5-1.5zm0 6a1.5 1.5 0 00-1.5-1.5h-3a1.5 1.5 0 000 3h3a1.5 1.5 0 001.5-1.5zm-1.5 4.5a1.5 1.5 0 010 3h-3a1.5 1.5 0 010-3h3zM6 10.495a1.5 1.5 0 00-1.5-1.5h-3a1.5 1.5 0 100 3h3a1.5 1.5 0 001.5-1.5zm-1.5 4.5a1.5 1.5 0 010 3h-3a1.5 1.5 0 010-3h3zm1.5 7.5a1.5 1.5 0 00-1.5-1.5h-3a1.5 1.5 0 000 3h3a1.5 1.5 0 001.5-1.5z"
                    clip-rule="evenodd"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 40 37" id="icon-protect" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.816 32.5c-.487 0-1.52-.324-2.887-1.168A18.108 18.108 0 0113 28.002c-3.412-3.852-5.5-9.251-5.5-16.294 0-.164.11-.314.279-.361 4.894-1.358 8.845-3.265 11.785-5.755a.39.39 0 01.503 0c2.94 2.49 6.892 4.397 11.785 5.755.17.047.28.197.28.36 0 7.044-2.089 12.443-5.5 16.295a18.108 18.108 0 01-3.93 3.33c-1.367.844-2.4 1.168-2.886 1.168z"
                    stroke="#000" stroke-width="3"></path>
                <path d="M15.08 18.605l3.674 3.948 6.983-7.5" stroke="#000" stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 40 37" id="icon-return" xmlns="http://www.w3.org/2000/svg">
                <circle cx="19.5" cy="18.5" r="15" stroke="#000" stroke-width="3"></circle>
                <path d="M14 19.5a5.5 5.5 0 105.5-5.5" stroke="#000" stroke-width="3"></path>
                <path d="M20 18l-6-4 6-4v8z" fill="#000"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 40 37" id="icon-return2" xmlns="http://www.w3.org/2000/svg">
                <rect x="7.666" y="5.5" width="30.405" height="24.595" rx="2.5" stroke="#000" stroke-width="3"></rect>
                <rect x="17.832" y="5.5" width="10.071" height="3.81" rx="1.905" stroke="#000" stroke-width="3"></rect>
                <circle cx="11.619" cy="23.119" r="10.119" fill="#fff" stroke="#000" stroke-width="3"></circle>
                <path d="M6.713 21.605h7.262c1.604 0 2.905 1.301 2.905 2.905v0c0 1.604-1.3 2.905-2.905 2.905h-3.55"
                    stroke="#000" stroke-width="3"></path>
                <rect x="4.812" y="21.604" width="4.998" height="2.168" rx="1.084" transform="rotate(-45 4.812 21.604)"
                    fill="#000"></rect>
                <rect x="4.812" y="21.604" width="2.436" height="4.997" rx="1.218" transform="rotate(-45 4.812 21.604)"
                    fill="#000"></rect>
            </symbol>
            <symbol fill="none" viewBox="0 0 93 82" id="icon-screen" xmlns="http://www.w3.org/2000/svg">
                <rect x="2" y="2" width="88.105" height="64" rx="4" stroke="#222" stroke-width="4"></rect>
                <path fill="#222" d="M1.844 52h88.421v4H1.844z"></path>
                <rect x="40.527" y="57.949" width="9.211" height="3.684" rx="1.842" fill="#222"></rect>
                <path
                    d="M12.896 39.605l5.89-5.889a6 6 0 018.485 0l4.41 4.41a6 6 0 008.484 0l13.62-13.62a6 6 0 018.486 0l4.41 4.41a6 6 0 008.484 0l4.047-4.048M64.385 79.492H27M38 81V68M54 81V68"
                    stroke="#222" stroke-width="4"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 44 39" id="icon-screen2" xmlns="http://www.w3.org/2000/svg">
                <rect x="1.5" y="1.5" width="41" height="29" rx="4.5" stroke="#000" stroke-width="3"></rect>
                <path fill="#000" d="M3 22h38v3H3z"></path>
                <rect x="12" y="36" width="20" height="3" rx="1.5" fill="#000"></rect>
                <path fill="#000" d="M16 30h3v8h-3zM25 30h3v8h-3z"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 42 34" id="icon-speedometer" xmlns="http://www.w3.org/2000/svg">
                <mask id="bia" fill="#fff">
                    <path fill-rule="evenodd"
                        d="M36.806 34a20.693 20.693 0 004.75-13.222C41.556 9.303 32.253 0 20.778 0 9.303 0 0 9.303 0 20.778 0 25.8 1.782 30.408 4.75 34h32.056z"
                        clip-rule="evenodd"></path>
                </mask>
                <path fill="#000"
                    d="M36.806 34v3h1.414l.9-1.09L36.806 34zM4.75 34l-2.313 1.91.9 1.09H4.75v-3zm33.807-13.222c0 4.3-1.523 8.237-4.063 11.312l4.627 3.82a23.693 23.693 0 005.436-15.132h-6zM20.778 3c9.818 0 17.778 7.96 17.778 17.778h6C44.556 7.646 33.91-3 20.778-3v6zM3 20.778C3 10.959 10.96 3 20.778 3v-6C7.646-3-3 7.646-3 20.778h6zM7.062 32.09A17.692 17.692 0 013 20.778h-6A23.693 23.693 0 002.436 35.91l4.626-3.82zM4.75 37h32.057v-6H4.75v6z"
                    mask="url(#bia)"></path>
                <circle cx="20.779" cy="20.779" r="4.667" stroke="#000" stroke-width="2"></circle>
                <rect width="2.833" height="10.573" x="30.141" y="9.042" fill="#000" rx="1.417"
                    transform="rotate(45 30.141 9.042)"></rect>
            </symbol>
            <symbol fill="none" viewBox="0 0 24 24" id="icon-steering-wheel" xmlns="http://www.w3.org/2000/svg">
                <path fill="#000" fill-rule="evenodd"
                    d="M12.718 0c1.664.098 3.237.536 4.65 1.246l-.96 1.664a10.052 10.052 0 00-3.69-.99V0zm-1.436 1.92a10.052 10.052 0 00-3.69.99l-.96-1.664A11.919 11.919 0 0111.282 0v1.92zm7.33.045a12.08 12.08 0 013.403 3.407l-1.66.96a10.099 10.099 0 00-2.703-2.703l.96-1.664zm4.122 4.651A11.965 11.965 0 0124 11.99C24 18.622 18.627 24 12 24S0 18.622 0 11.99c0-1.932.456-3.757 1.266-5.374l1.66.96c-.179.369-.336.75-.471 1.146 1.481 1.276 1.957 1.492 3.402 1.544 1.79.064 3.42-1.267 6.143-1.267s4.352 1.33 6.143 1.267c1.445-.052 1.92-.268 3.402-1.544a10.036 10.036 0 00-.472-1.146l1.661-.96zM6.348 3.63a10.104 10.104 0 00-2.703 2.703l-1.66-.96a12.08 12.08 0 013.404-3.406l.96 1.663zm15.7 9.24c-2.454.21-4.587 3.892-3.134 6.47a10.07 10.07 0 003.134-6.47zM5.086 19.34c1.453-2.578-.68-6.26-3.134-6.47a10.071 10.071 0 003.134 6.47zM9.754 17c-1.322 0-3.146 3.085-.202 3.726 1.53.332 3.367.332 4.896 0 2.944-.641 1.12-3.727-.202-3.727H9.754z"
                    clip-rule="evenodd"></path>
                <circle cx="12" cy="12" r="11" stroke="#222" stroke-width="2"></circle>
            </symbol>
            <symbol fill="none" viewBox="0 0 50 36" id="icon-trinket" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1.5 6A4.5 4.5 0 016 1.5h6.61a2.5 2.5 0 011.07.241l1.114.528a5.5 5.5 0 002.356.53h9.702a5.5 5.5 0 002.487-.595L28.661.866l.678 1.338.856-.434a2.5 2.5 0 011.13-.27H42A6.5 6.5 0 0148.5 8v20a6.5 6.5 0 01-6.5 6.5H31.445a2.5 2.5 0 01-1.254-.337l-.7-.406a5.5 5.5 0 00-2.758-.741h-9.47a5.5 5.5 0 00-2.619.664l-.957.518.714 1.319-.714-1.319a2.5 2.5 0 01-1.191.302H6A4.5 4.5 0 011.5 30V6z"
                    stroke="#000" stroke-width="3"></path>
                <path
                    d="M1.5 10A2.5 2.5 0 014 7.5h35.828a3.5 3.5 0 013.5 3.5v15a2.5 2.5 0 01-2.5 2.5H4A2.5 2.5 0 011.5 26V10z"
                    stroke="#000" stroke-width="3"></path>
                <path d="M11.5 7.5h23v21h-23v-21z" stroke="#000" stroke-width="3"></path>
            </symbol>
            <symbol fill="none" viewBox="0 0 40 34" id="icon-web-cloud" xmlns="http://www.w3.org/2000/svg">
                <path stroke="#222" stroke-width="4"
                    d="M34.334 12.8l.098 1.047.92.512c1.634.91 2.648 2.595 2.648 4.409 0 2.816-2.366 5.227-5.273 5.227H7.273C4.366 23.995 2 21.584 2 18.768c0-1.854 1.01-3.513 2.647-4.41l1.167-.64-.139-1.322a7.036 7.036 0 01-.039-.737c0-4.733 3.955-8.664 8.91-8.664A9.009 9.009 0 0121.76 6.62l.981 1.328 1.49-.712a7.014 7.014 0 013.042-.686c3.723 0 6.734 2.789 7.06 6.25z">
                </path>
                <path fill="#000" stroke="#fff" stroke-width="4"
                    d="M16.913 14.51l-3.48 6.36a3.129 3.129 0 00-.103 2.989 3.01 3.01 0 002.17 1.625v3.445c0 1.57 1.224 3.066 3 3.066h2c1.776 0 3-1.495 3-3.066v-3.445a3.01 3.01 0 002.17-1.625 3.129 3.129 0 00-.104-2.988l-3.48-6.36-.027-.052-.031-.05a2.985 2.985 0 00-2.528-1.414c-1.06 0-1.997.566-2.528 1.415l-.03.05-.029.05z">
                </path>
            </symbol>
        </svg>
    </div>
</body>

</html>