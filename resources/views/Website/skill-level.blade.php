@extends('web_layout.layout')
@section('title')
    LamJones | Skill Level
@endsection
@section('head')
    <style>
        /*! CSS Used from: Embedded */
        a,
        div,
        h2,
        img,
        p,
        section,
        span {
            background: transparent;
            border: 0;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline;
        }

        a {
            cursor: pointer;
            text-decoration: none;
        }

        :focus {
            outline: none;
        }

        [data-mesh-id$=inlineContent] {
            pointer-events: none;
            position: relative;
        }

        [data-mesh-id$=-gridContainer]>* {
            pointer-events: auto;
        }

        #masterPage.mesh-layout #PAGES_CONTAINER {
            -ms-grid-row-align: start;
            -ms-grid-column-align: start;
            -ms-grid-column: 1;
        }

        #masterPage.mesh-layout #PAGES_CONTAINER {
            grid-area: 3/1/4/2;
            -ms-grid-row: 3;
        }

        #masterPage.mesh-layout #PAGES_CONTAINER {
            align-self: stretch;
        }

        #masterPage.mesh-layout main#PAGES_CONTAINER {
            display: block;
        }

        #masterPage.mesh-layout #SITE_PAGES {
            height: 100%;
        }

        #masterPage.mesh-layout #PAGES_CONTAINER,
        #masterPage.mesh-layout #SITE_PAGES {
            position: relative;
        }

        /*! CSS Used from: Embedded */
        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%;
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%);
        }

        /*! CSS Used from: Embedded */
        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%;
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%);
        }

        body:not(.responsive) .JshATs {
            overflow-x: clip;
        }

        .fcNEqv {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            height: 100%;
        }

        .fcNEqv>div {
            align-self: stretch !important;
            justify-self: stretch !important;
        }

        .KcpHeO {
            word-wrap: break-word;
            direction: var(--text-direction);
            min-height: var(--min-height);
            min-width: var(--min-width);
            overflow-wrap: break-word;
            pointer-events: none;
            text-align: start;
        }

        .KcpHeO>* {
            pointer-events: auto;
        }

        .KcpHeO h2,
        .KcpHeO p {
            margin-block: 0;
            margin: 0;
        }

        .KcpHeO a {
            color: inherit;
        }

        /*! CSS Used from: Embedded */
        body:not(.device-mobile-optimized) .CohWsy {
            --display: flex;
            display: var(--display);
        }

        body:not(.device-mobile-optimized) .V5AUxf {
            -moz-column-gap: var(--margin);
            column-gap: var(--margin);
            display: flex;
            flex-direction: var(--items-direction);
            margin: 0 auto;
            position: relative;
            width: calc(100% - var(--padding)*2);
        }

        body:not(.device-mobile-optimized) .V5AUxf>* {
            flex: var(--column-flex) 1 0%;
            left: 0;
            margin-bottom: var(--padding);
            margin-top: var(--padding);
            min-width: 0;
            position: relative;
            top: 0;
        }

        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%;
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%);
        }

        .if7Vw2 {
            height: 100%;
            left: 0;
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100%);
            mask-size: var(--mask-size, 100%);
            overflow: hidden;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: absolute;
            top: 0;
            width: 100%;
        }

        .if7Vw2 .i1tH8h {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .if7Vw2 .DXi4PB {
            height: var(--fill-layer-image-height, 100%);
            opacity: var(--fill-layer-image-opacity);
        }

        .wG8dni {
            height: 100%;
        }

        .tcElKx {
            background-color: var(--bg-overlay-color);
            background-image: var(--bg-gradient);
        }

        .Yjj1af {
            transform: scale(var(--scale, 1));
            transition: var(--transform-duration, transform 0s);
        }

        .VXAmO2 {
            --divider-pin-height__: min(1, calc(var(--divider-layers-pin-factor__) + 1));
            --divider-pin-layer-height__: var(--divider-layers-pin-factor__);
            --divider-pin-border__: min(1, calc(var(--divider-layers-pin-factor__) / -1 + 1));
            height: calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__));
        }

        .VXAmO2,
        .VXAmO2 .dy3w_9 {
            left: 0;
            position: absolute;
            width: 100%;
        }

        .VXAmO2 .dy3w_9 {
            --divider-layer-i__: var(--divider-layer-i, 0);
            background-position: left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;
            background-repeat: repeat-x;
            border-bottom-style: solid;
            border-bottom-width: calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            height: calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));
            opacity: calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1));
        }

        .UORcXs {
            --divider-height__: var(--divider-top-height, auto);
            --divider-offset-x__: var(--divider-top-offset-x, 0px);
            --divider-layers-size__: var(--divider-top-layers-size, 0);
            --divider-layers-y__: var(--divider-top-layers-y, 0px);
            --divider-layers-x__: var(--divider-top-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-top-layers-pin-factor, 0);
            border-top: var(--divider-top-padding, 0) solid var(--divider-top-color, currentColor);
            opacity: var(--divider-top-opacity, 1);
            top: 0;
            transform: var(--divider-top-flip, scaleY(-1));
        }

        .UORcXs .dy3w_9 {
            background-image: var(--divider-top-image, none);
            background-size: var(--divider-top-size, contain);
            border-color: var(--divider-top-color, currentColor);
            bottom: 0;
            filter: var(--divider-top-filter, none);
        }

        .Io4VUz {
            --divider-height__: var(--divider-bottom-height, auto);
            --divider-offset-x__: var(--divider-bottom-offset-x, 0px);
            --divider-layers-size__: var(--divider-bottom-layers-size, 0);
            --divider-layers-y__: var(--divider-bottom-layers-y, 0px);
            --divider-layers-x__: var(--divider-bottom-layers-x, 0px);
            --divider-layers-pin-factor__: var(--divider-bottom-layers-pin-factor, 0);
            border-bottom: var(--divider-bottom-padding, 0) solid var(--divider-bottom-color, currentColor);
            bottom: 0;
            opacity: var(--divider-bottom-opacity, 1);
            transform: var(--divider-bottom-flip, none);
        }

        .Io4VUz .dy3w_9 {
            background-image: var(--divider-bottom-image, none);
            background-size: var(--divider-bottom-size, contain);
            border-color: var(--divider-bottom-color, currentColor);
            bottom: 0;
            filter: var(--divider-bottom-filter, none);
        }

        .YzqVVZ {
            overflow: visible;
            position: relative;
        }

        .MW5IWV {
            height: 100%;
            left: 0;
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100%);
            mask-size: var(--mask-size, 100%);
            overflow: hidden;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: absolute;
            top: 0;
            width: 100%;
        }

        .MW5IWV .Kv1aVt {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .VgO9Yg {
            height: 100%;
        }

        .LWbAav {
            background-color: var(--bg-overlay-color);
            background-image: var(--bg-gradient);
        }

        .SPY_vo {
            pointer-events: none;
        }

        .zKbzSQ {
            touch-action: manipulation;
        }

        .rYiAuL {
            cursor: pointer;
        }

        .gSXewE {
            height: 0;
            left: 0;
            overflow: hidden;
            position: absolute;
            top: 0;
            width: 0;
        }

        .j7pOnl {
            box-sizing: border-box;
            height: 100%;
            width: 100%;
        }

        .BI8PVQ {
            min-height: var(--image-min-height);
            min-width: var(--image-min-width);
        }

        .BI8PVQ img {
            filter: var(--filter-effect-svg-url);
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100% 100%);
            mask-size: var(--mask-size, 100% 100%);
            -o-object-position: var(--object-position);
            object-position: var(--object-position);
        }

        .MazNVa {
            left: var(--left, auto);
            position: var(--position-fixed, static);
            top: var(--top, auto);
            z-index: var(--z-index, auto);
        }

        .MazNVa .BI8PVQ img {
            box-shadow: 0 0 0 #000;
            position: static;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .MazNVa .j7pOnl {
            display: block;
            overflow: hidden;
        }

        .MazNVa .BI8PVQ {
            overflow: hidden;
        }

        .PFkO7r {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        .HT5ybB {
            height: auto;
            position: relative;
            width: 100%;
        }

        body:not(.responsive) .dBAkHi {
            align-self: start;
            grid-area: 1/1/1/1;
            height: 100%;
            justify-self: stretch;
            left: 0;
            position: relative;
        }

        body:not(.device-mobile-optimized) .PFkO7r {
            margin-left: calc((100% - var(--site-width))/2);
            width: var(--site-width);
        }

        /*! CSS Used from: Embedded */
        .zKbzSQ {
            touch-action: manipulation;
        }

        /*! CSS Used from: Embedded */
        .Oqnisf {
            overflow: visible;
        }

        .HlRz5e {
            display: block;
            height: 100%;
            width: 100%;
        }

        .HlRz5e img {
            max-width: var(--wix-img-max-width, 100%);
        }

        .MW5IWV {
            height: 100%;
            left: 0;
            -webkit-mask-image: var(--mask-image, none);
            mask-image: var(--mask-image, none);
            -webkit-mask-position: var(--mask-position, 0);
            mask-position: var(--mask-position, 0);
            -webkit-mask-repeat: var(--mask-repeat, no-repeat);
            mask-repeat: var(--mask-repeat, no-repeat);
            -webkit-mask-size: var(--mask-size, 100%);
            mask-size: var(--mask-size, 100%);
            overflow: hidden;
            pointer-events: var(--fill-layer-background-media-pointer-events);
            position: absolute;
            top: 0;
            width: 100%;
        }

        .MW5IWV .Kv1aVt {
            height: 100%;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .VgO9Yg {
            height: 100%;
        }

        .LWbAav {
            background-color: var(--bg-overlay-color);
            background-image: var(--bg-gradient);
        }

        /*! CSS Used from: Embedded */
        .E6jjcn {
            direction: var(--direction);
            display: flex;
            flex-wrap: wrap;
            justify-content: var(--justify-content);
            margin: var(--margin);
            position: relative;
        }

        .Zc7IjY {
            direction: ltr;
            margin: var(--item-margin);
        }

        .VM7gjN {
            display: flex;
            flex-direction: column;
        }

        /*! CSS Used from: https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/rb_wixui.thunderbolt[SiteButton_IronButton].e43e2fbf.min.css */
        .o6Oevi {
            align-items: center;
            box-sizing: border-box;
            display: flex;
            justify-content: var(--label-align);
            min-width: 100%;
            text-align: initial;
            width: -moz-max-content;
            width: max-content;
        }

        .o6Oevi:before {
            max-width: var(--margin-left, 0);
        }

        .o6Oevi:after,
        .o6Oevi:before {
            align-self: stretch;
            content: "";
            flex-grow: 1;
        }

        .o6Oevi:after {
            max-width: var(--margin-right, 0);
        }

        .jtGA1H .o6Oevi {
            background-color: var(--corvid-background-color, rgba(var(--bg, var(--color_17)), var(--alpha-bg, 1)));
            background-image: url(https://static.parastorage.com/services/editor-elements-library/dist/thunderbolt/media/ironpatern.84ec58ff.png);
            box-shadow: var(--shd, 0 2px 5px rgba(0, 0, 0, .53));
            color: var(--corvid-color, rgb(var(--txt, var(--color_15))));
            transition: var(--trans1, border-color .4s ease 0s, background-color .4s ease 0s, color .4s ease 0s);
        }

        .jtGA1H .o6Oevi,
        .jtGA1H .sdBsNc {
            border-radius: var(--corvid-border-radius, var(--rd, 2));
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        .jtGA1H .sdBsNc {
            box-shadow: var(--ishd, hsla(0, 0%, 100%, .59) 0 0 6px 0 inset, hsla(0, 0%, 100%, .92) 0 1px 0 0 inset, hsla(0, 0%, 100%, .2) 0 0 5px 0 inset);
        }

        .jtGA1H .pzGjQu {
            color: var(--corvid-color, rgb(var(--txt, var(--color_15))));
            font: var(--fnt, var(--font_5));
            position: relative;
            transition: var(--trans1, border-color .4s ease 0s, background-color .4s ease 0s, color .4s ease 0s);
            white-space: nowrap;
        }

        .jtGA1H .D6oBUw {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA5NpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpFNUJCRTkyRDIyMjA2ODExODIyQUI2RTY2QjVBQTI1NSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyN0M4RUYxRjlBMDMxMUUyQkY4RkFENzdFNDE1QTVCNiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyN0M4RUYxRTlBMDMxMUUyQkY4RkFENzdFNDE1QTVCNiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2ICgxMy4wIDIwMTIwMzA1Lm0uNDE1IDIwMTIvMDMvMDU6MjE6MDA6MDApICAoTWFjaW50b3NoKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjEwRDNGQUZCMDUyMTY4MTE4MjJBQjZFNjZCNUFBMjU1IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkU1QkJFOTJEMjIyMDY4MTE4MjJBQjZFNjZCNUFBMjU1Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+CZyQ/wAAAXdJREFUeNqck79Lw0AUxy9NpNaI7VDooqKT4NS/wcW5xbGj6V46ds7/oYtdOhUhg6D/QHAPWWLVToFKY0miNef3lXd6iFTw4EPevR/37t57McT3MvhbYtnQbJIptP2Xg8FBJrAYk3XkuNT44EOkoQVSQBlUmDLryTEHKZPzIYXFmU123gY1cAT2gA0W4BEE4EW7dqECt0ADHIPzfr9/EUXRwxKLvrQnPdsb7E9xq+vugANw1uv1LpMkkUS325VKHgwGV2QHh6BKcaqy6r27nU7ndDabCSLPc6Hkdrt9Qnb2o6yGpVWbFBUpZd113ZXS932hZMdx6lxIlVBYWgGoBWkYhnGr1aJ3iel0KiCvHEjP1S5Un0ta4Bt4Gg6HN3EcCyLLMqHk0Wh0C/szt4r8palNEx20CIKgSNM0sW271mw2q8g+8Tzvejwe38F+D+Z8g6UK3ACbP/q8r/V5ovX5FWTg/a8JM/mKv07Yutm2WL92tv/9V30KMAByHrXgbfxckwAAAABJRU5ErkJggg==);
            background-repeat: no-repeat;
            display: inline-block;
            height: 15px;
            width: 15px;
        }

        .jtGA1H .G0CATF,
        .jtGA1H .MPoHxk,
        .jtGA1H .Nd49ob,
        .jtGA1H .wniW9e {
            position: absolute;
        }

        .jtGA1H .Nd49ob {
            left: 2px;
            top: 2px;
        }

        .jtGA1H .G0CATF {
            right: 2px;
            top: 2px;
        }

        .jtGA1H .MPoHxk {
            bottom: 2px;
            left: 2px;
        }

        .jtGA1H .wniW9e {
            bottom: 2px;
            right: 2px;
        }

        .jtGA1H[aria-disabled=false] .o6Oevi {
            cursor: pointer;
        }

        body:not(.device-mobile-optimized) .jtGA1H[aria-disabled=false]:hover .o6Oevi {
            background-color: rgba(var(--bgh, var(--color_17)), var(--alpha-bgh, 1));
        }

        body:not(.device-mobile-optimized) .jtGA1H[aria-disabled=false]:hover .pzGjQu {
            color: rgb(var(--txth, var(--color_15)));
        }

        .zKbzSQ {
            touch-action: manipulation;
        }

        /*! CSS Used from: Embedded */
        #PAGES_CONTAINER {
            --pinned-layer-in-container: 51;
            --above-all-in-container: 49;
        }

        #PAGES_CONTAINER {
            left: 0;
            margin-left: 0;
            width: 100%;
            min-width: 980px;
            height: undefined;
        }

        #SITE_PAGES {
            left: 0;
            margin-left: 0;
            width: 100%;
            min-width: 980px;
            height: undefined;
        }

        .font_0 {
            font: var(--font_0);
            color: rgb(var(--color_15));
            letter-spacing: 0em;
        }

        .font_5 {
            font: var(--font_5);
            color: rgb(var(--color_15));
            letter-spacing: normal;
        }

        .font_8 {
            font: var(--font_8);
            color: rgb(var(--color_15));
            letter-spacing: 0em;
        }

        .color_11 {
            color: rgb(var(--color_11));
        }

        #SITE_PAGES {
            --transition-duration: 700ms;
        }

        /*! CSS Used from: Embedded */
        #webbb {
            left: 0;
            margin-left: 0;
            width: 100%;
            min-width: 980px;
        }

        #comp-llkj485x {
            left: 0;
            margin-left: 0;
            width: 100%;
            min-width: 980px;
        }

        #comp-llkj486o {
            left: 0;
            margin-left: 0;
            width: 100%;
            min-width: 980px;
        }

        #comp-llkj486u1 {
            left: 0;
            margin-left: 0;
            width: 100%;
            min-width: 980px;
        }

        #comp-llkj486z {
            left: 0;
            margin-left: 0;
            width: 100%;
            min-width: 980px;
        }

        #comp-llkj487l {
            width: 980px;
        }

        #comp-llkj487q {
            --brw: 0px;
            --brd: 50, 65, 88;
            --bg: 61, 155, 233;
            --rd: 0px;
            --shd: none;
            --alpha-bg: 0;
            --alpha-brd: 0;
            --boxShadowToggleOn-shd: none;
        }

        #comp-llkj487q {
            width: 548px;
        }

        [id^="comp-llkj487y__"] {
            width: 548px;
        }

        [id^="comp-llkj48861__"] {
            width: 399px;
            height: auto;
        }

        [id^="comp-llkj488i__"] {
            width: 495px;
            height: auto;
        }

        #comp-llkj489a1 {
            --contentPaddingLeft: 0px;
            --contentPaddingRight: 0px;
            --contentPaddingTop: 0px;
            --contentPaddingBottom: 0px;
        }

        #comp-llkj489a1 {
            width: 98px;
            height: 100px;
        }

        #comp-llkj489c2 {
            --contentPaddingLeft: 0px;
            --contentPaddingRight: 0px;
            --contentPaddingTop: 0px;
            --contentPaddingBottom: 0px;
        }

        #comp-llkj489c2 {
            width: 237px;
            height: 111px;
        }

        #comp-llkj489f1 {
            --rd: 2px;
            --bg: 61, 155, 233;
            --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s, color 0.4s ease 0s;
            --shd: 0 2px 5px rgba(0, 0, 0, 0.53);
            --txt: var(--color_11);
            --alpha-txt: 1;
            --ishd: rgba(255, 255, 255, 0.59) 0 0 6px 0 inset, rgba(255, 255, 255, 0.92) 0 1px 0 0 inset, rgba(255, 255, 255, 0.2) 0 0 5px 0 inset;
            --fnt: normal normal 700 26px/normal enriqueta, serif;
            --bgh: var(--color_17);
            --txth: 255, 255, 255;
            --alpha-txth: 1;
            --bgd: 204, 204, 204;
            --txtd: 255, 255, 255;
            --alpha-txtd: 1;
            --alpha-bg: 1;
            --alpha-bgh: 1;
            --alpha-bgd: 1;
        }

        #comp-llkj489f1 {
            width: 188px;
            height: 48px;
        }

        #comp-llkj489j1 {
            --rd: 2px;
            --bg: 61, 155, 233;
            --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s, color 0.4s ease 0s;
            --shd: 0 2px 5px rgba(0, 0, 0, 0.53);
            --txt: var(--color_11);
            --alpha-txt: 1;
            --ishd: rgba(255, 255, 255, 0.59) 0 0 6px 0 inset, rgba(255, 255, 255, 0.92) 0 1px 0 0 inset, rgba(255, 255, 255, 0.2) 0 0 5px 0 inset;
            --fnt: normal normal 700 26px/normal enriqueta, serif;
            --bgh: var(--color_17);
            --txth: 255, 255, 255;
            --alpha-txth: 1;
            --bgd: 204, 204, 204;
            --txtd: 255, 255, 255;
            --alpha-txtd: 1;
            --alpha-bg: 1;
            --alpha-bgh: 1;
            --alpha-bgd: 1;
        }

        #comp-llkj489j1 {
            width: 188px;
            height: 48px;
        }

        #comp-llkjuoxk2 {
            width: 514px;
            height: auto;
        }

        #comp-llkj489m1 {
            --rd: 2px;
            --bg: 61, 155, 233;
            --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s, color 0.4s ease 0s;
            --shd: 0 2px 5px rgba(0, 0, 0, 0.53);
            --txt: var(--color_11);
            --alpha-txt: 1;
            --ishd: rgba(255, 255, 255, 0.59) 0 0 6px 0 inset, rgba(255, 255, 255, 0.92) 0 1px 0 0 inset, rgba(255, 255, 255, 0.2) 0 0 5px 0 inset;
            --fnt: normal normal 700 26px/normal enriqueta, serif;
            --bgh: var(--color_17);
            --txth: 255, 255, 255;
            --alpha-txth: 1;
            --bgd: 204, 204, 204;
            --txtd: 255, 255, 255;
            --alpha-txtd: 1;
            --alpha-bg: 1;
            --alpha-bgh: 1;
            --alpha-bgd: 1;
        }

        #comp-llkj489m1:not([data-screen-in-hide="done"]) {
            opacity: 0;
        }

        #comp-llkj489m1 {
            width: 188px;
            height: 48px;
        }

        #comp-llkj489q2 {
            width: 378px;
            height: auto;
        }

        #comp-llkj488r2 {
            --contentPaddingLeft: 0px;
            --contentPaddingRight: 0px;
            --contentPaddingTop: 0px;
            --contentPaddingBottom: 0px;
        }

        #comp-llkj488r2 {
            width: 52px;
            height: 52px;
        }

        [data-mesh-id=comp-llkj485xinlineContent] {
            height: auto;
            width: 100%;
            position: static;
            min-height: 80px;
        }

        [data-mesh-id=comp-llkj486oinlineContent] {
            height: auto;
            width: 100%;
            position: static;
            min-height: 40px;
        }

        [data-mesh-id=comp-llkj486u1inlineContent] {
            height: auto;
            width: 100%;
            display: flex;
        }

        [data-mesh-id=comp-llkj486u1inlineContent-gridContainer] {
            position: static;
            display: grid;
            height: auto;
            width: 100%;
            min-height: auto;
            margin-top: -97px;
            grid-template-rows: min-content 1fr;
            grid-template-columns: 100%;
        }

        [data-mesh-id=comp-llkj486u1inlineContent-gridContainer]>[id="comp-llkj486z"] {
            position: relative;
            margin: 0px 0px -10px calc((100% - 980px) * 0.5);
            left: 0px;
            grid-area: 1 / 1 / 2 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=comp-llkj486u1inlineContent-gridContainer]>[id="comp-llkj489q2"] {
            position: relative;
            margin: 24px 0px 30px calc((100% - 980px) * 0.5);
            left: 301px;
            grid-area: 2 / 1 / 3 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=comp-llkj486u1inlineContent-gridContainer]>[id="comp-llkj488r2"] {
            position: relative;
            margin: 0px 0px 19px calc((100% - 980px) * 0.5);
            left: 149px;
            grid-area: 2 / 1 / 3 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=comp-llkj487linlineContent] {
            height: auto;
            width: 100%;
        }

        [data-mesh-id=comp-llkj487linlineContent-gridContainer] {
            position: static;
            display: grid;
            height: auto;
            width: 100%;
            min-height: 953px;
            grid-template-rows: repeat(6, min-content) 1fr;
            grid-template-columns: 100%;
        }

        [data-mesh-id=comp-llkj487linlineContent-gridContainer]>[id="comp-llkj487q"] {
            position: relative;
            margin: 112px 0px -70px calc((100% - 980px) * 0.5);
            left: 59px;
            grid-area: 1 / 1 / 2 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=comp-llkj487linlineContent-gridContainer]>[id="comp-llkj489a1"] {
            position: relative;
            margin: 169px 0px 10px calc((100% - 980px) * 0.5);
            left: 796px;
            grid-area: 1 / 1 / 2 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=comp-llkj487linlineContent-gridContainer]>[id="comp-llkj489c2"] {
            position: relative;
            margin: 200px 0px 10px calc((100% - 980px) * 0.5);
            left: 647px;
            grid-area: 1 / 1 / 2 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=comp-llkj487linlineContent-gridContainer]>[id="comp-llkj489f1"] {
            position: relative;
            margin: 42px 0px 10px calc((100% - 980px) * 0.5);
            left: 161px;
            grid-area: 2 / 1 / 3 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=comp-llkj487linlineContent-gridContainer]>[id="comp-llkj489j1"] {
            position: relative;
            margin: 0px 0px 10px calc((100% - 980px) * 0.5);
            left: 161px;
            grid-area: 4 / 1 / 5 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=comp-llkj487linlineContent-gridContainer]>[id="comp-llkjuoxk2"] {
            position: relative;
            margin: 0px 0px 10px calc((100% - 980px) * 0.5);
            left: 425px;
            grid-area: 2 / 1 / 8 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=comp-llkj487linlineContent-gridContainer]>[id="comp-llkj489m1"] {
            position: relative;
            margin: 0px 0px 10px calc((100% - 980px) * 0.5);
            left: 161px;
            grid-area: 6 / 1 / 7 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=comp-llkj487linlineContent-wedge-4] {
            visibility: hidden;
            height: 187px;
            width: 0;
            grid-area: 2 / 1 / 4 / 2;
        }

        [data-mesh-id=comp-llkj487linlineContent-wedge-6] {
            visibility: hidden;
            height: 332px;
            width: 0;
            grid-area: 2 / 1 / 6 / 2;
        }

        [data-mesh-id^="comp-llkj487y__"][data-mesh-id$="inlineContent"] {
            height: auto;
            width: 100%;
        }

        [data-mesh-id^="comp-llkj487y__"][data-mesh-id$="inlineContent-gridContainer"] {
            position: static;
            display: grid;
            height: auto;
            width: 100%;
            min-height: auto;
            grid-template-rows: min-content 1fr;
            grid-template-columns: 100%;
        }

        [data-mesh-id^=comp-llkj487y__]>[id^="comp-llkj48861"] {
            position: relative;
            margin: 8px 0px 48px 0;
            left: 37px;
            grid-area: 1 / 1 / 2 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id^=comp-llkj487y__]>[id^="comp-llkj488i"] {
            position: relative;
            margin: 0px 0px 69px 0;
            left: 11px;
            grid-area: 2 / 1 / 3 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=ContainerwebbbinlineContent] {
            height: auto;
            width: 100%;
        }

        [data-mesh-id=ContainerwebbbinlineContent-gridContainer] {
            position: static;
            display: grid;
            height: auto;
            width: 100%;
            min-height: 40px;
            grid-template-rows: repeat(2, min-content) 1fr;
            grid-template-columns: 100%;
            padding-bottom: 0px;
            box-sizing: border-box;
        }

        [data-mesh-id=ContainerwebbbinlineContent-gridContainer]>[id="comp-llkj485x"] {
            position: relative;
            margin: 0px 0px 0 calc((100% - 980px) * 0.5);
            left: 0px;
            grid-area: 1 / 1 / 2 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=ContainerwebbbinlineContent-gridContainer]>[id="comp-llkj486o"] {
            position: relative;
            margin: 0px 0px 0 calc((100% - 980px) * 0.5);
            left: 0px;
            grid-area: 2 / 1 / 3 / 2;
            justify-self: start;
            align-self: start;
        }

        [data-mesh-id=ContainerwebbbinlineContent-gridContainer]>[id="comp-llkj486u1"] {
            position: relative;
            margin: 0px 0px 0 calc((100% - 980px) * 0.5);
            left: 0px;
            grid-area: 3 / 1 / 4 / 2;
            justify-self: start;
            align-self: start;
        }

        #comp-llkj489q2 {
            height: auto;
        }

        #comp-llkj488r2 {
            --height: 52px;
            --width: 52px;
        }

        #comp-llkj489a1 {
            --height: 100px;
            --width: 98px;
        }

        #comp-llkj489c2 {
            --height: 111px;
            --width: 237px;
        }

        #comp-llkj489f1 {
            --shc-mutated-brightness: 31, 78, 117;
            --fnt: normal normal 700 26px/normal enriqueta, serif;
            --label-align: center;
            --label-text-align: center;
        }

        #comp-llkj489j1 {
            --shc-mutated-brightness: 31, 78, 117;
            --fnt: normal normal 700 26px/normal enriqueta, serif;
            --label-align: center;
            --label-text-align: center;
        }

        #comp-llkjuoxk2 {
            --min-height: 422px;
            height: auto;
        }

        #comp-llkj489m1 {
            --shc-mutated-brightness: 31, 78, 117;
            --fnt: normal normal 700 26px/normal enriqueta, serif;
            --label-align: center;
            --label-text-align: center;
        }

        [id^="comp-llkj48861__"] {
            height: auto;
        }

        [id^="comp-llkj488i__"] {
            --min-height: 129px;
            height: auto;
        }

        #webbb {
            width: auto;
            min-height: 40px;
        }

        #comp-llkj485x {
            --bg-overlay-color: rgb(0, 0, 0);
            --bg-gradient: none;
            min-width: 980px;
        }

        #comp-llkj486o {
            --bg-overlay-color: rgb(var(--color_15));
            --bg-gradient: none;
            min-width: 980px;
        }

        #comp-llkj486u1 {
            --bg-overlay-color: rgb(var(--color_15));
            --bg-gradient: none;
            min-width: 980px;
        }

        #comp-llkj486z {
            --bg-overlay-color: rgb(253, 116, 4);
            --divider-top-layer-3-display: none;
            --bg-gradient: none;
            --fill-layer-image-opacity: 1;
            --padding: 0px;
            --margin: 0px;
            min-width: 980px;
            --divider-top-image: url("data:image/svg+xml,%3Csvg id='comp-llkj486z-top' preserveAspectRatio='xMidYMax slice' data-bbox='-0.001 205.493 1920.001 94.507' viewBox='-0.001 205.493 1920.001 94.507' height='100%25' width='100%25' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cdefs%3E%3Cstyle%3E%23comp-llkj486z-top %7B fill: %23000000; %7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cpath d='M0 300h1920v-58.8l-1 .2c-.6.2-1.2-.6-1.8-.4l-.3-.3c.7-.4 1.3-.9 2-1.3v-1.5c-1-.2-1.8-.3-2.7-.5V236c.3.1.4.2.6.2l2.1.6v-2.1c-.1-.3-.3-.6-.4-.8v.1l-.1-.1c-.6-.2-1.3-.4-1.9-.6-.5 1-1 2.1-1.5 3.3-1.2-1.7-1.2-1.7 1.3-5.1.8.9 1.4 1.7 2.1 2.4h.1c0-.5 0-1-.1-1.5-.4-2-3-1.8-4.8-2.7 1.1-.6 2.2-1.2 1.1-2.4-.5.2-.9.4-1.3.6-.1-.1-.1-.2-.2-.3.7-.2 1.4-.4 2.2-.6.8 1.2-.1 2.6 1.7 3.3-.4-1.5-.7-2.9-1.4-4.3-.2-.5-1.4-.7-2.3-1.1 0-.2.1-.6.2-1.2-1.3.4-2.5.7-3.8 1.1.3.3.6.5.7.6l-1.4 1.4c-.4-.2-1.2-.7-2-1.2-.1-.2-.1-.3-.2-.5-1.1.8-2.1 1.6-3.1 2.4l.3.3c-.4-.2-.9-.3-1.5-.5-.1.7-.3 1.3-.4 2-.4-.1-.7-.1-.9-.2-1.3-1.5-2.5-.8-3.4.3-1.1 1.2-1.9 2.6-2.9 3.9-.6-.3-1.4-.7-2.4-1.3-.5 1.6-2 2.1-3.7 2.3-1.3.1-1.6.7-1.1 1.6.1.3 0 .6-.1 1h-.5c-.1-.4-.2-.8-.3-1.5-.4.4-.6.7-.8 1-.7-.3-1.3-.5-2.2-.9.4-.2.7-.4 1.2-.7-.9-.3-1.7-.6-2.5-.9-2.1.9.4 2.2-.6 3.4-.5-.8-.9-1.5-1.3-2.2-.1.1-.2.3-.2.4-1.7-.3-3.3-.5-5-.8-.1.1-.1.2-.2.4l1 1c0 .1-.1.3-.1.4-1.2-.2-2.4-.3-3.9-.5-1.4.7.1 1.2 1 1.9-.7.2-1.1.3-1.2.3-.9-.8-1.7-1.4-2.7-2.3-.7 2.2-1.1 2.3-3.1 1.6-.3.3-.6.6-.9 1-3.2-1.5-2.3 1.4-3.6 1.9 1.6 2.4 1.5 3.2-.1 4.2-.3-.7-.5-1.4-.9-2-.5-.6-1.3-.9-1.5-1.5 0-.5 0-.9-.1-1.4-.2-.9-.6-1.8-.9-2.7s-.9-1.5-2.2-1.5c-.6 0-1.1-.4-1.6-.5-1 .8-2 1.6-3.3 2.6-1.7-2.3-2.6-4.5-2.7-6.7-.1-1.7-1.6-2.5-3.7-1.9-.1 0-.4 0-.5-.1v5.7c-.1-1.8-.2-3-.3-3.2-1.1 1.2-3.1 1.6-2.9 3.4.1 1.2-.6 2.4-1 3.6-1.3-.3-2.2-.6-3.3-.8.1.6.2 1.1.3 1.5h-.4c-.9-1.8-2.5-2.2-4.9-2-.5 0-1 .1-1.6.1 1.2.2 1.5.9 1 2.2-.2-.4-.4-.9-.6-1.4-.8-.1-1.8-.2-2.7-.4 0-.2.1-.3.1-.5h.9c-.7-.1-1.4-.4-2-1-.3-.3-1.3-.1-1.6-.1-.3 1.1-.5 2-.8 2.9-.2 0-.5 0-.7-.1 0-.5.1-.9.1-1.6-.7-.2-1.8-.7-2.4-.5-2.1.8-.9 2.4-1 3.6l-.5.1c-.2-.8-.5-1.5-.8-2.4-.4.6-.7 1.2-1.1 1.7.1 0 .2-.1.4-.1.3.7.5 1.4.9 2.4-1-.3-1.4-.4-1.8-.5-.6 2.3-2.3 2.3-4.8 1.5.2.4.4.9.7 1.4-.1.1-.3.2-.4.3-.9-.7-1.7-1.4-2.7-2.2-.4.4-.8 1-1.2 1.5-.5-.6-1-1.2-1.8-2.1v1.7c0 .6-.2 1.1-.3 1.7h-.4c-.3-1.2-.7-2.4-1.1-3.7-1.2 1-2.1 1.8-3.2 2.7-.4-.2-.9-.4-1.2-.6.9-.5 1.7-1.1 2.7-1.6-1.3-1.2-2.7-.8-4-.7-1.1-1.3-3.9-1.4-5-.2-.6.3-1.3.6-1.8.9-.9-.7-1.9-1.3-3.2-2.2 1 .3 1.7.5 2.5.7s1.6.4 2.5.6c-.5-.3-.9-.8-1.5-1-.9-.3-1.8-.5-2.7-.7-1.5-.4-2.9-.4-3.5 1.1-.5-.3-1-.6-1.6-.9-.5.9.2 2.3-1.7 2.3-.2-.7-.5-1.4-.7-2.2-.6.3-1 .5-1.1.5-1.2-.4-2.1-.7-3.3-1 0 .6.1.8.1 1.2-3.6-.3-6.4 1-9.7 2.1-1.5-.7-2.3 1-3.5 1.4-3.5-.8-3.7-3.3-4.9-5.3-.5-.9-1.8-1.5-2.9-2-.6-.3-1.6 0-2.3.2-.2.1.1 1 .1 1.6-.1 0-.4.1-.5 0-1.6-.9-3.3-.7-4.9-.1l-18.1 3.6c.1-.3.3-.5.4-.9-1.4.1-2.6.2-3.6.3l1.5 1-4.9 1c-.3-.1-.5-.1-.8-.3v.3c-1.2-.2-2.2-.4-3.2-.5v-.4c.5-.1.9-.3 1.4-.4-.5-.3-1-.6-1.6-.8-.1 0-.3 0-.4-.1-1.2-.1-3.1.6-4.1-.2-1.7-1.2-1.3-2.6-1.5-4.5-.2-1.6.5-3.6-.9-4.9-1-.8-10.5.3-10.5.4v.3c.4.2 1 .4 1.2.7s0 .8 0 1.1c-.5 0-1.1.1-1.4-.1-.8-.5-1.4-1.2-2.2-1.7-.1-.1-.5.1-.6.1.6.8 1.1 1.5 1.7 2.2l-.2.2-2-1c-1.3.8-2.4 1.6-3.7 2.4-.1-.4-.1-.7-.2-1.1-.7.1-1.4.1-2.2.2 0-.1-.1-.3-.1-.4 1.2-.3 2.5-.5 3.7-.8.1.1.1.2.2.3.2-.4.3-.8.6-1.3-2.8.5-5.4 1.1-8 1.4-1.5.2-3.1 0-4.6-.2-.8-.2-1.5-.9-2-1.6.6.1 1.1.3 1.7.4.1-.1.2-.3.3-.4-1.2-.7-2.4-1.3-3.5-2 .2-.1.4-.3.6-.4.4-.5.8-.9 1.4-1.6-1-.1-1.7-.2-2.3-.3.3-.5 1.1-1.4.8-1.6-.6-.6-1.7-.8-2.7-1.3l1-1c-3.8.3-7.4 0-10.6 1.8-2.1-1.6-4.1.3-6.8 0 1.2.8 2.1 1.4 2.9 1.9-3.5-.6-3.8-.9-3.6-2.1-1.7.3-3.3.6-5 1-.8-1-1.6-2.1-2.5-3.1-.2.5-.3.8-.5 1.1-.1 0-.2-.1-.4-.1.2-.7.4-1.4.7-2.2-1.2-.4-2.4-.6-3.6-.6-.2.6-.4 1-.5 1.3-1.6.1-3 .2-4.6.3.2-.5.4-.9.7-1.1-.9.2-1.7.5-2.6.7 1 .6 2 1.1 3 1.7 0 .1 0 .3.1.4-1.3-.1-2.6-.1-4-.2.6.5 1.2 1.1 1.8 1.6-2.5-.6-3.7-1.4-3.7-2.6-.8.2-1.6.5-2.4.7-.1-.4-.2-.6-.4-1l-2.1.6c.2.5.4 1 .5 1.5.1.4-.3.9-.6 1.3 0 .1-.7 0-.8-.1-.1-.4-.1-.9 0-1.3 0-.3.3-.5.4-.7-.4-.1-.8-.2-1.1-.3-2 .4-3.9.9-5.2 2.5-.4.4-1.3.6-2 .8-.1-.1-.2-.3-.4-.4.5-.4 1.1-.7 1.6-1.1-2.2-.6-7.1.5-7.6 1.3-2.4.3-4.6.4-6.8.8-3.4.6-6.7 1.2-10.1.1-.3-.1-.8 0-1.1.1-3.6 1.2-7.2 2.3-10.7 3.6-2.1.8-4.1 1.7-6.1 2.6-.3.1-.8.4-1.1.3-3.5-.9-6.3.3-9 1.8-1 .5-1.9.7-3.1.8-1.7.1-3.4.4-5 .9-1.1.3-1.9 1.1-3.2 1.8-4-1.1-7.4 1.5-11.7 1.8.6 1.1 1.1 2.1 1.6 3-1.7 1.3 1.2 1.8.8 3l-.9-.6c-.8-.5-1.4-.7-2.4-.1-1.2.8-2.7.9-4.4.8-2.7-.2-5.5-.1-8.3-.2-.7 0-1.3-.4-1.9-.6 0-.2.1-.5.1-.7-2.9.2-5.8.4-8.6.6-.3 0-.6 0-.8-.1-2.6-1.7-5.4-1.6-8.4-.8h-.5c-2.4-1.4-5.4-1.2-8.1-1.5-2.5-.3-4.9-.9-7-2.1-.5-.3-1.2-.5-1.8-.4-3.7.1-7.3.3-10.9.5-2.5.2-5 .5-7.4.8-.4 0-.9.1-1.1 0-3-1.8-6.2-1.3-9.5-.6-1 .2-1.8.1-2.9-.1-1.8-.5-3.7-.8-5.5-.6-.1 0-.1-.1-.2-.1l.1.1-1.5.3c-.4-.4-.7-.9-1-1.4-.8.1-1.6-.2-2.2-.7-.5-.1-1.1-.4-1.5-.7-.6-.4-1.1-1-1.6-1.5l-1.8-.9c.2-.1.3-.2.5-.2-1.5-.8-4.5-.8-6.1-.4 0 0-.1 0-.1-.1h-.3c.1 0 .2 0 .3-.1-1-.6-1.9-1.4-3.3-1.4-.3 1.1-.5 2-.8 2.9-.2 0-.5 0-.7-.1 0-.5.1-.9.1-1.6-.7-.2-1.8-.7-2.4-.5-2.1.8-.9 2.4-1 3.6l-.5.1c-.2-.8-.5-1.5-.8-2.4-.4.6-.7 1.2-1.1 1.7.1 0 .2-.1.4-.1.3.7.5 1.4.9 2.4-1-.3-1.4-.4-1.8-.5-.6 2.3-2.3 2.3-4.8 1.5.2.4.4.9.7 1.4-.1.1-.3.2-.4.3-.9-.7-1.7-1.4-2.7-2.2-.4.4-.8 1-1.2 1.5-.5-.6-1-1.2-1.8-2.1v1.7c0 .6-.2 1.1-.3 1.7h-.4c-.3-1.2-.7-2.4-1.1-3.7-1.2 1-2.1 1.8-3.2 2.7-.4-.2-.9-.4-1.2-.6.9-.5 1.7-1.1 2.7-1.6-1.3-1.2-2.7-.8-4-.7-1.1-1.3-3.9-1.4-5-.2-.6.3-1.3.6-1.8.9-.9-.7-1.9-1.3-3.2-2.2 1 .3 1.7.5 2.5.7s1.6.4 2.5.6c-.5-.3-.9-.8-1.5-1-.9-.3-1.8-.5-2.7-.7-1.5-.4-2.9-.4-3.5 1.1-.5-.3-1-.6-1.6-.9-.1.2-.2.5-.2.8-1 .2-1.9.4-2.9.6-.8.2-1.4.6-2.1.9l-.7-.7c-.2.5-.4.9-.5 1.1.6.4 1.2.7 2.1 1.2-1.3.2-2 .3-2.6.4-1.7-2.1-3.4-4.3-5.3-6.6-.2.5-.3.8-.5 1.1-.1 0-.2-.1-.4-.1.2-.7.4-1.4.7-2.2-1.2-.4-2.4-.6-3.6-.6.1-.3.3-.7.5-1.1-1.9.4-3.7.5-4.8 1.6-.9.2-1.7.5-2.6.7-.1-.1-.2-.1-.3-.2l-.4.4c-.5.1-.9.2-1.4.4-.1-.7-.2-1.1-.3-1.6-.4.7-.5 1.3-.5 1.8-.8.2-1.6.5-2.4.7-.1-.4-.2-.6-.4-1l-2.1.6c-.2-.5-.4-1.1-.6-1.6-1.5.3-2.6.5-3.8.7 0 .2-.1.3-.1.5.9.2 1.9.5 2.9.8-2 .4-3.9.9-5.2 2.5-.4.4-1.3.6-2 .8-.1-.1-.2-.3-.4-.4.5-.4 1.1-.7 1.6-1.1-2.2-.6-7.1.5-7.6 1.3-2.4.3-4.6.4-6.8.8-3.4.6-6.7 1.2-10.1.1-.3-.1-.8 0-1.1.1-3.6 1.2-7.2 2.3-10.7 3.6-2.1.8-4.1 1.7-6.1 2.6-.3.1-.8.4-1.1.3-3.5-.9-6.3.3-9 1.8-1 .5-1.9.7-3.1.8-1.7.1-3.4.4-5 .9-1.1.3-1.9 1.1-3.2 1.8-4-1.1-7.4 1.5-11.7 1.8.6 1.1 1.1 2.1 1.6 3-1.7 1.3 1.2 1.8.8 3l-.9-.6c-.8-.5-1.4-.7-2.4-.1-1.2.8-2.7.9-4.4.8-2.7-.2-5.5-.1-8.3-.2-.7 0-1.3-.4-1.9-.6 0-.2.1-.5.1-.7-2.9.2-5.8.4-8.6.6-.3 0-.6 0-.8-.1-2.6-1.7-5.4-1.6-8.4-.8h-.5c-2.4-1.4-5.4-1.2-8.1-1.5-2.5-.3-4.9-.9-7-2.1-.5-.3-1.2-.5-1.8-.4-3.7.1-7.3.3-10.9.5-2.5.2-5 .5-7.4.8-.4 0-.9.1-1.1 0-3-1.8-6.2-1.3-9.5-.6-1 .2-1.8.1-2.9-.1-1.8-.5-3.7-.8-5.5-.6-.1 0-.1-.1-.2-.1l-1.4-.7c0-.2-.1-.4-.1-.6-.2.1-.4.2-.6.2l-.4-.2c-.1-.2-.2-.5-.3-.7l-.6.3-2.8-1.4c-.3-.3-.5-.6-.8-.8-.7-.6-1.5-1.3-2.2-1.1-1.6-.8-4.7-.8-6.3-.4-1-.6-1.9-1.4-3.3-1.4-.3 1.1-.5 2-.8 2.9-.2 0-.5 0-.7-.1 0-.5.1-.9.1-1.6-.7-.2-1.8-.7-2.4-.5-2.1.8-.9 2.4-1 3.6l-.5.1c-.2-.8-.5-1.5-.8-2.4-.4.6-.7 1.2-1.1 1.7.1 0 .2-.1.4-.1.3.7.5 1.4.9 2.4-1-.3-1.4-.4-1.8-.5-.6 2.3-2.3 2.3-4.8 1.5.2.4.4.9.7 1.4-.1.1-.3.2-.4.3-.9-.7-1.7-1.4-2.7-2.2-.4.4-.8 1-1.2 1.5-.5-.6-1-1.2-1.8-2.1v1.7c0 .6-.2 1.1-.3 1.7h-.4c-.3-1.2-.7-2.4-1.1-3.7-1.2 1-2.1 1.8-3.2 2.7-.4-.2-.9-.4-1.2-.6.9-.5 1.7-1.1 2.7-1.6-1.3-1.2-2.7-.8-4-.7-1.1-1.3-3.9-1.4-5-.2-.6.3-1.3.6-1.8.9-.9-.7-1.9-1.3-3.2-2.2 1 .3 1.7.5 2.5.7s1.6.4 2.5.6c-.5-.3-.9-.8-1.5-1-.9-.3-1.8-.5-2.7-.7-1.5-.4-2.9-.4-3.5 1.1-.5-.3-1-.6-1.6-.9-.5.9.2 2.3-1.7 2.3-.2-.7-.5-1.4-.7-2.2-.6.3-1 .5-1.1.5-1.2-.4-2.1-.7-3.3-1 0 .6.1.8.1 1.2-3.6-.3-6.4 1-9.7 2.1-1.5-.7-2.3 1-3.5 1.4-3.5-.8-3.7-3.3-4.9-5.3-.5-.9-1.8-1.5-2.9-2-.6-.3-1.6 0-2.3.2-.2.1.1 1 .1 1.6-.1 0-.4.1-.5 0-1.6-.9-3.3-.7-4.9-.1-1.7.6-3.2 1.5-4.8 2.2-2.3.9-7.7 4.1-10.2 3.6-.7-.2-1.3-.6-1.8-1 0 .1 0 .2-.1.3-.2-.2-.3-.4-.4-.6-.4-.2-.7-.4-1.2-.5-1.3-.2-4.4-.7-6.3-.3v.9c-1.2-.2-2.2-.4-3.2-.5v-.4c.5-.2 1-.3 1.6-.5-.8-.9-2.4.1-3.7.3-.1-1.2-.3-3.3-1.1-4.7-.5-.1-.9-.2-1.4-.3 0-.1 0-.3.1-.4.2 0 .4-.1.6-.1-.4-.3-.9-.5-1.5-.4.2-.1-.2-3.1-.3-3.4-.9-.2-1.7-.6-2.6-1.1-3.1.2-6.4.5-9.7.8v.3c.4.2 1 .4 1.2.7s0 .8 0 1.1c-.5 0-1.1.1-1.4-.1-.8-.5-1.4-1.2-2.2-1.7-.1-.1-.5.1-.6.1.6.8 1.1 1.5 1.7 2.2l-.2.2-2-1c-1.3.8-2.4 1.6-3.7 2.4-.1-.4-.1-.7-.2-1.1-.7.1-1.4.1-2.2.2 0-.1-.1-.3-.1-.4 1.2-.3 2.5-.5 3.7-.8.1.1.1.2.2.3.2-.4.3-.8.6-1.3-2.8.5-5.4 1.1-8 1.4-1.5.2-3.1 0-4.6-.2-.8-.2-1.5-.9-2-1.6.6.1 1.1.3 1.7.4.1-.1.2-.3.3-.4-1.2-.7-2.4-1.3-3.5-2 .2-.1.4-.3.6-.4.4-.5.8-.9 1.4-1.6-1-.1-1.7-.2-2.3-.3.3-.5 1.1-1.4.8-1.6-.6-.6-1.7-.8-2.7-1.3l1-1c-3.8.3-7.4 0-10.6 1.8-2.1-1.6-4.1.3-6.8 0 1.2.8 2.1 1.4 2.9 1.9-3.5-.6-3.8-.9-3.7-2.1-2.7.5-5.5 1-8.3 1.6-.4.1-.7.2-1 .4 1.1-.1 2.2-.1 3.4-.2.2 0 .4-.3.6-.4 1.3-.9 3.7-.4 4.5 1.2-.8-.3-1.5-.4-2.1-.7-1-.4-1.6-.5-2.3.4-.8 1.1-1.3 1.3-2.5 1 .3-.3.5-.6.7-.9-1.2.9-1.9.1-2.6-.3-.3.1-.5.3-.8.4l-.7-.7c-.2.5-.4.9-.5 1.1.6.4 1.2.7 2.1 1.2-1.3.2-2 .3-2.6.4-1.7-2.1-3.4-4.3-5.3-6.6-.2.5-.3.8-.5 1.1-.1 0-.2-.1-.4-.1.2-.7.4-1.4.7-2.2-2.6-.8-5.3-.8-8-.1-2.6.7-5.2 1.4-7.8 2.2-.1-.4-.2-.6-.4-1-3 1.1-6.8.9-8.9 3.4-.4.4-1.3.6-2 .8-.1-.1-.2-.3-.4-.4.5-.4 1.1-.7 1.6-1.1-2.2-.6-7.1.5-7.6 1.3-2.4.3-4.6.4-6.8.8-3.4.6-6.7 1.2-10.1.1-.3-.1-.8 0-1.1.1-3.6 1.2-7.2 2.3-10.7 3.6-2.1.8-4.1 1.7-6.1 2.6-.3.1-.8.4-1.1.3-3.5-.9-6.3.3-9 1.8-1 .5-1.9.7-3.1.8-1.7.1-3.4.4-5 .9-1.1.3-1.9 1.1-3.2 1.8-4-1.1-7.4 1.5-11.7 1.8.6 1.1 1.1 2.1 1.6 3-1.7 1.3 1.2 1.8.8 3l-.9-.6c-.8-.5-1.4-.7-2.4-.1-1.2.8-2.7.9-4.4.8-2.7-.2-5.5-.1-8.3-.2-.7 0-1.3-.4-1.9-.6 0-.2.1-.5.1-.7-2.9.2-5.8.4-8.6.6-.3 0-.6 0-.8-.1-2.6-1.7-5.4-1.6-8.4-.8h-.5c-2.4-1.4-5.4-1.2-8.1-1.5-2.5-.3-4.9-.9-7-2.1-.5-.3-1.2-.5-1.8-.4-3.7.1-7.3.3-10.9.5-2.5.2-5 .5-7.4.8-.4 0-.9.1-1.1 0-3-1.8-6.2-1.3-9.5-.6-1 .2-1.8.1-2.9-.1-2.9-.8-5.9-1.1-8.8.5-3.4-2.3-7.8-.7-11.8-1.6v3.2c-2.1.9.3 2.1-.5 3.1-.2-.3-.4-.5-.6-.8-.5-.7-1-1.1-2.3-.8-1.1.2-2.5.4-3.5.1-2.2-.6-3.7 0-5.7 1.4.4.7.9 1.7 1.4 2.6.1.1.1.3.1.4-1.1 1.4 0 2.7.2 4 .3 1.7.1 1.8-2 1.8-.3 0-.7.1-1.2.2.7.9 1.3 1.7 2 2.7-1-.4-1.7-.7-2.7-1 0-.1.1-.4.1-.8 0-.7-.3-1.1-1.4-1.1-1.9.1-3.8.2-5.7.1-1.1 0-2.2-.3-3.5-.6.7 1.7 1.9 2.3 3.5 1.9.2.9.4 1.7.5 2.5-.1.1-.3.2-.4.3-1.1-.9-2.3-1.7-3.6-2.7-.4.5-.9.9-1.1 1.1-2.1.1-3.9.2-5.8.3.5-.7 1-1.5 1.5-2.1 1.1.4 1.8.7 2.5 1 0-.7.1-1.2.1-1.8h-10.9c.1.3.1.7.1.7h6.9c.1.1.2.3.2.4-1.6.7-3.2 1.4-5 2.3-.2-.9-.4-1.6-.5-2.2-1.3 2.4-4.7.2-6.3 2-.8-1-1.4-1.8-2.1-2.6.5-.2.9-.3 1.4-.5l-.1-.4c-1.3.2-2.7.3-4 .5v.5c.7 0 1.5.1 2.2.1-1.2 1.1-2.2 1.1-4.8-.1.4-.2.8-.5 1.3-.8-.7 0-1.2-.2-1.8-.1-.4.1-1 .4-.9.6.3 1.1.7 2.2 1.1 3.4-1.2 0-2.8-.2-4.2 0-2.4.4-4.5-.2-6.7-.5-2.3-.4-4.7-.3-6.9-.7-1.6-.3-3-1-4.6-1.5-.6-.2-1.2-.4-1.8-.4-4 .2-8 .5-12 .8-2.1.2-4.2.6-6.3.9-.4.1-.9.2-1.1.1-3.1-1.7-6.2-1.1-9.5-.5-.9.2-1.9.1-2.8 0-3-.5-6-1-8.8.8-3.3-2.3-7.5-.6-11.8-1.4 1.6-.7 2.7-1.2 3.9-1.6 1.3-.5 2-2.1 1.1-2.9-1.2-1.1-2.6-2.2-3.8-3.3-.7-.6-1.9-1.1-.5-2.1l-1.2-.6c.5-.4.8-.8 1.3-1 .8-.5 1.7-.9 2.6-1.3 1.8-.8 2-1.8.9-3.1-2.2-2.4-2.2-2.4-5.6-3.3.5-.5 1-1 1.3-1.4-.8-.4-1.7-.7-1.7-.9.2-1.4-1.3-2.1-2.4-2.4-1.6-.4-1.7-1.1-1.8-2 0-.2-.2-.4-.3-.7-.3.1-.6.2-1.2.3 1.2-2.8-2.2-2.3-3.1-3-3.1 1.3-6 2.6-9 3.9 1 .4 1.8.6 2.3 1 .2.1-.4.8-.6 1.3-1.5-.6-2.8-1.4-4.4-1 1 .6 1.9 1 2.8 1.5 0 .1 0 .2-.1.3-.9-.1-1.8-.2-2.4-.3-.7 1.1-1.4 2.1-1.8 2.7-1 0-1.5-.1-1.9 0-.5.1-.9.3-1.4.4v-.7c-1.8.7-3.6 1.3-5.5 2-1.7.6-3.4.8-4.9-.4.6-.1 1.2-.2 1.8-.2v-.4l-3.9-1.2c.1-.7.2-1.2.3-2-.9.1-1.5.2-1.8.3-.3-.6-.3-1.5-.9-1.8-.5-.3-1.6-.1-2.6-.1 0-.1.1-.6.3-1.4-3.2 1.5-6.8 2.2-8.8 4.9-2.8-.9-3.7 1.5-6.2 2 1.5.4 2.5.6 3.6.9-.1.2-.2.3-.2.5-1.3-.7-3.5.6-4.2-1.3-3.1 1.8-6.1 3.6-9.5 5.6l2.6 1.3c-.9.3-1.4.6-2.1.8-2.6-1.4-5.3-2.9-8.1-4.5 0 .4-.1.7-.1 1h-.3c-.2-.7-.3-1.4-.5-2.1-6.2.1-9.3 3.9-13.5 6.6l-.8-.8c-1.3.8-2.7 1.5-3.8 2.4-1 .9-1.7 2-2.6 3.1-.5.6-1 1.1-1.5 1.6-.2-.1-.4-.2-.5-.3.3-.5.6-1 1-1.6-3 .3-4.5 2.2-6.5 3.4.2.4.4.7.6 1-1.9-.4-3.3.3-4.7 1.1-1.8.9-4.1.8-6.1-.7 1.8.1 3.4.3 5.2.4-.9-1.2-1.5-2.1-2.2-3.1.4-.3.7-.5 1-.7l1.2 2.4h.7c.7-1 1.3-1.9 2-2.9.4-.2 1-.3 1.1-.6.5-1.2 1.2-2.5-.1-3.7-.3-.3-.4-.8-.6-1.3 1.6.4 2.9.3 3.3-1.3.2.1.3.2.5.4-.8 1-1.7 2-2.5 3l.6.3c1-1.2 2.2-2.3 3-3.6.3-.5-.2-1.3-.3-2h-.5c.3-.1.5-.2.8-.4.2-.1.5-.2 1-.5-1.3-.5-2.5-.9-3.7-1.4-.1.4-.2.6-.2.8-.7.1-1.4.1-2.4.2v-2.4c-1.3-.1-2.8-.1-4.3-.2-.1.1-.1.3-.2.4-.1-.4-.3-.7-.4-1.2-.7.4-1.4.7-2.4 1.3-.2-.8-.3-1.5-.5-2.3-2.8-.4-5.5-.1-8 1.3-.2-.9-.3-1.7-.5-2.6-1.8.7-3.1.4-4.4-.4-1-.6-1.9-.8-2.5.4-.1.2-.7.3-1.2.3.3-.3.7-.7 1.2-1.3-.8.1-1.2.2-1.6.3-.2-.6-.3-1.2-.6-1.9.5.1.9.1 1.5.2-.3-.7-.6-1.4-1.2-2.6-1.2 1.1-2.1 1.9-3 2.7-.1 0-.2-.1-.2-.1.4-.7.8-1.4 1.2-2.2-.2.1-.4.1-.5.2l-2.7-3.3c-.2 0-.3.1-.5.1-.1.4-.2.8-.4 1.8-1-1.1-1.7-1.8-2.6-2.9-1.5-.2-1.1.7-.9 1.6-1.4-.1-2.8-.2-4.5-.4 1.1-.5 1.9-.8 2.7-1.2.1.3.2.6.2.9h.5v-2.5c-2.3.9-2.7.8-3.3-.8-.5.1-1.1.1-1.7.2-.7-3.1-2.8-.2-4.1-.7-1.4 2.7-2.1 3.1-3.7 2.9.4-1.3.8-2.6 1.1-3.6 1-1.2 1.9-2.3 3-3.2 1.7-1.5-.4-2.6-.6-4h-4.6c1-2.5 2.5-4.5 4.6-6.2 1.3-1.1.8-2.2-.6-3.2-1.5-1.1-3.3-1.3-5.1-1.8-.9-.3-2.1-.5-1.4-1.7-.5-.1-.8-.1-1.3-.2 0-.1-.1-.3 0-.4.8-1 1.5-2.1 2.4-3.1 1.1-1.1.7-2-.5-2.6-2.2-1.1-4.2-2.9-7.4-1.3.3-.9.5-1.6.7-2.2-.1 0-.3-.1-.4-.1-.3.2-.6.4-1.1.7-.8-1.2-1.9-2-3.7-2-1.5 0-2.5-.4-3.1-1.4-.1-.2-.9-.2-1.4-.2-.4-2.5-3.2-.8-4.3-1.3-2.2 2.1-4.3 4.1-6.5 6.3 1.2 0 2-.1 2.7.1.2.1.1.9.2 1.3h-4.2c-.1 0-.2.5-.2.5 1.1.2 2.1.3 3.1.5 0 .1.1.2.1.3-.9.2-1.8.3-2.3.4-.1 1.3-.2 2.4-.3 3.7-.5-.3-.8-.4-1.2-.6-.4.4-.8.9-1.3 1.4-.2-.3-.5-.5-.5-.6.6-.7 1.4-1.4 1.9-2.1.2-.3-.1-.8-.2-1.5-1.7 2.1-3.1 4-4.7 5.8-.7.7-1.6 1.4-2.6 1.9-1.3.7-2.1.7-3.7.2l1.8-.6c0-.1-.1-.3-.1-.4h-4c-.4-.7-.6-1.2-.9-1.7-.6.2-1.2.5-1.7.6-.3-.5-.5-1.4-.9-1.4-1-.1-2.1.2-3.2.4 0-.1-.1-.5-.1-.8-1.1-.2-5.4 4.9-5.8 6.9-3.1 0-2.6 2.5-4.7 3.7 1.6-.1 2.7-.2 3.8-.3-2.2 1.4-3.4 1.5-4.4.6-1.7 2.2-3.3 4.5-5 6.8.1.1.2.1.3.2.3-.1.9-.2 1-.4.1-1.1 1.9-1.5 1.8-2.8-.1-.9 2.8-1.6 4-.9-.8.2-1.5.5-2.2.6-1 .2-1.5.6-1 1.4.1.2.2.6.2.8-.1.4-.3.8-.5 1.3-.3-.3-.6-.6-.9-1-.2 1.7-2.1 1.2-3.5 1.5.2.3.4.7.5.9.8-.1 1.5-.2 2.7-.3-.8.9-1.2 1.3-1.6 1.7-3.2-.5-6.4-1.1-9.6-1.6-.1.2-.1.4-.2.9-.5-.7-.8-1.1-1.2-1.7-5.7 1.9-6.7 6.4-9.1 10.2-.4-.2-.7-.3-1.1-.4-.8 1.2-1.8 2.4-2.4 3.6-.5 1.1-.5 2.2-.7 3.4-.1.7-.3 1.3-.5 2l-.7-.1c.1-.6.2-1.2.2-1.9-2.6 1.2-3.2 3.4-4.4 5.2 1.1.2 2.1.5 3.3.7-1.4 1-2.5 1.8-3.6 2.6-.1-.1-.2-.1-.3-.2l2.3-2.3c-.2-.2-.5-.4-.7-.5-1 .7-2.2 1.2-3.1 2-1 1-1.8 2.2-2.6 3.3-1.4 1.8-3.1 3.4-5.6 4.4-.4.2-.8.5-1 .9-1.2 2.6-2.6 3.4-6.6 3.6-.2-.7-.4-1.4-.7-2.3-.7.4-1.1.6-1.6.9 1.6-1.8.7-3.2-.7-4.7-.9-1-2.1-2-1.4-3.5.1-.3-.5-.9-.7-1.1-1.5.4-2.6.7-3.7 1.1-.1-.2-.2-.4-.3-.5.5-.2 1-.4 1.8-.7-.2-.5-.1-1.5-.6-1.8-2.1-1-3.3.6-4.8 1.4l-.3-.3c.8-.6 1.5-1.2 2.3-1.9-.8.1-1.6.1-1.9.2-.9.8-1.5 1.3-2.4 2.1-.3-.8-.4-1.1-.5-1.4-.8.2-1.4.3-2.1.5-.8-.6-1.5-1.1-2.4-1.7.3-.3.6-.6.8-.9-.1-.1-.2-.2-.4-.3-.5.4-1 .8-1.6 1.3-.9-1.2.1-2 1-3h-2.7c.5-.8.8-1.5 1.3-2.3-1.3.6-2.5 1.1-3.7 1.6l-.3-.3c1.1-.9 2.3-1.8 3.5-2.7-1.8-.2-3.1-.4-4.5-.6v-1.3c.5.3.9.6 1.4.7.6.1 1.2 0 1.9 0-.1-.4-.1-.9-.2-1.3-.2-.8-.2-1.7-.7-2.2-.8-.9-.7-2.3-2.7-2.6-1-.1-2.1-.5-3.3-.8 1.3-.6 2.2-1.3 1.2-2.5-.4.2-.9.4-1.3.6-.1-.1-.1-.2-.1-.3.6-.3 1.3-.5 1.9-.8.9 1.1.1 2.6 2 3.2-.5-1.3-.8-2.7-1.5-3.9-.4-.6-1.5-.9-2.4-1.3l-.3.3c.1-.5.1-1 .2-1.6-1.3.5-2.5.9-3.7 1.4.3.3.5.5.8.7-.5.2-.9.4-1.4.7.3.2.6.4.8.5l-.4.4c-.8-.5-1.6-.9-2.4-1.4-.1-.1-.2-.3-.3-.4-1 .9-2 1.8-3.2 2.8.1 0-.4-.1-1-.4-.1.7-.2 1.3-.2 2.1-.5-.1-1-.2-1.3-.4-1.1-1-2-.6-2.7.3-1.1 1.4-2 2.9-3 4.4-.5-.2-1.3-.6-2.2-1 0 .2.1.3.1.5-1.2.6-2.4 1.3-3.7 1.7-1.2.4-1.8.7-1.1 1.7.2.2 0 .6 0 .9h-.5c-.1-.4-.3-.8-.4-1.5-.3.4-.5.7-.8 1-.7-.2-1.4-.5-2.2-.8.3-.3.6-.5.9-.9-.9-.3-1.8-.5-3.2-.9.3 1.4.5 2.4.7 3.5h-.3c-.5-.7-.9-1.3-1.4-2-.1.1-.1.3-.2.4-1.7-.2-3.4-.3-5.1-.5 0 .1-.1.2-.1.3.4.3.7.6 1.1 1l-.1.4c-1.2-.1-2.4-.2-4-.3-1.4.8.2 1.2 1.2 1.8-.5.2-1 .4-1.1.4-1-.7-1.8-1.3-2.9-2.1-.4 2.2-1 2.4-2.9 1.7-.3.4-.5.7-.8 1.1-1.4-.5-2.5-.7-2.7.9 0 .4-.5.8-.8 1.2 1.7 2.1 1.8 2.9.5 3.9-1-1-2-2.1-3-3.2-.1-.4-.2-.9-.4-1.4-.3-.8-.6-1.5-.9-2.2-.4-1-1-1.8-2.6-1.6-.5 0-1-.3-1.5-.5-1 .9-1.9 1.8-3.1 2.8-1.9-2.3-3-4.5-3.4-6.9-.2-1.4-1.8-1.7-3.5-1.6-2.2.2-3.5 1.3-5.2 1.9-.6.2-1.5 0-2.2 0-.4 0-.9.1-1.7.2-.4-1-1-2.2-1.4-3.3-.5-1.4-1.5-1.9-3.3-1.5-2.4.6-5.2.8-5.8 3.4-.7-.7-1.2-1.2-1.9-1.8-.4 2-1.7 1.2-2.9 1-1 .7-2 1.4-3.4 2.4-.5.1-1.9-1-2.7.5-2.9-1.7-3 1.3-4.9 1.9 2.8 1.9 1.4 4.5 2.5 6.9-.7 0-1.3.1-1.8.1.1.1.2.1.2.2-.6.5-1.3 1-2.2 1.7-.2-.8-.2-1.1-.3-1.4-.4.1-.8.1-1.1.2-.4.1-.7.1-1 .2-.7-.6-1.5-1.2-2.2-1.8.3-.3.6-.5.9-.8-.1-.1-.2-.2-.4-.3l-1.5 1.2c-.2 0-.3-.1-.5-.1.4-.9.7-1.8 1.2-2.9-.6-.1-1.4-.2-2.2-.2.4-.6.8-1.3 1.3-2-1.3.4-2.5.9-3.8 1.3l-.3-.3c1.2-.8 2.4-1.6 3.8-2.5-1.8-.3-3.1-.6-4.5-.8V250c.3.1.4.2.6.2.9.2 1.7.4 2.6.7-.1-.6-.2-1.3-.3-1.9-.1-.4-.4-.8-.6-1.2 0-.5 0-1-.1-1.5-.4-2-3-1.8-4.8-2.7 1.1-.6 2.2-1.2 1.1-2.4-.5.2-.9.4-1.3.6-.1-.1-.1-.2-.2-.3.7-.2 1.4-.4 2.2-.6.8 1.2-.1 2.6 1.7 3.3-.4-1.5-.7-2.9-1.4-4.3-.2-.5-1.4-.7-2.3-1.1 0-.2.1-.6.2-1.2-1.3.4-2.5.7-3.8 1.1.3.3.6.5.7.6l-1.4 1.4c-.4-.2-1.2-.7-2-1.2-.1-.2-.1-.3-.2-.5-1.1.8-2.1 1.6-3.1 2.4l.3.3c-.4-.2-.9-.3-1.5-.5-.1.7-.3 1.3-.4 2-.4-.1-.7-.1-.9-.2-1.3-1.5-2.5-.8-3.4.3-1.1 1.2-1.9 2.6-2.9 3.9-.6-.3-1.4-.7-2.4-1.3-.5 1.6-2 2.1-3.7 2.3-1.3.1-1.6.7-1.1 1.6.1.3 0 .6-.1 1h-.5c-.1-.4-.2-.8-.3-1.5-.4.4-.6.7-.8 1-.7-.3-1.3-.5-2.2-.9.4-.2.7-.4 1.2-.7-.9-.3-1.7-.6-2.5-.9-2.1.9.4 2.2-.6 3.4-.5-.8-.9-1.5-1.3-2.2-.1.1-.2.3-.2.4-1.7-.3-3.3-.5-5-.8-.1.1-.1.2-.2.4l1 1c0 .1-.1.3-.1.4-1.2-.2-2.4-.3-3.9-.5-1.4.7.1 1.2 1 1.9-.7.2-1.1.3-1.2.3-.9-.8-1.7-1.4-2.7-2.3-.7 2.2-1.1 2.3-3.1 1.6-.3.3-.6.6-.9 1-3.2-1.5-2.3 1.4-3.6 1.9 1.6 2.4 1.5 3.2-.1 4.2-.3-.7-.5-1.4-.9-2-.5-.6-1.3-.9-1.5-1.5 0-.5 0-.9-.1-1.4-.2-.9-.6-1.8-.9-2.7-.3-.9-.9-1.5-2.2-1.5-.6 0-1.1-.4-1.6-.5-1 .8-2 1.6-3.3 2.6-1.7-2.3-2.6-4.5-2.7-6.7-.1-1.7-1.6-2.5-3.7-1.9-.1 0-.4 0-.5-.1v5.7c-.1-1.8-.2-3-.3-3.2-1.1 1.2-3.1 1.6-2.9 3.4.1 1.2-.6 2.4-1 3.6-1.3-.3-2.2-.6-3.3-.8.1.6.2 1.1.3 1.5h-.4c-.9-1.8-2.5-2.2-4.9-2-1.7.1-3.5.3-4.9-1-.3-.3-1.3-.1-1.6-.1-.3 1.1-.5 2-.8 2.9-.2 0-.5 0-.7-.1 0-.5.1-.9.1-1.6-.7-.2-1.8-.7-2.4-.5-2.1.8-.9 2.4-1 3.6l-.5.1c-.2-.8-.5-1.5-.8-2.4-.4.6-.7 1.2-1.1 1.7.1 0 .2-.1.4-.1.3.7.5 1.4.9 2.4-1-.3-1.4-.4-1.8-.5-.6 2.3-2.3 2.3-4.8 1.5.2.4.4.9.7 1.4-.1.1-.3.2-.4.3-.9-.7-1.7-1.4-2.7-2.2-.4.4-.8 1-1.2 1.5-.5-.6-1-1.2-1.8-2.1v1.7c0 .6-.2 1.1-.3 1.7h-.4c-.3-1.2-.7-2.4-1.1-3.7-1.2 1-2.1 1.8-3.2 2.7-.4-.2-.9-.4-1.2-.6.9-.5 1.7-1.1 2.7-1.6-1.3-1.2-2.7-.8-4-.7-1.1-1.3-3.9-1.4-5-.2-.5-.3-.9-.8-1.5-1-.9-.3-1.8-.5-2.7-.7-1.5-.4-2.9-.4-3.5 1.1-.5-.3-1-.6-1.6-.9-.5.9.2 2.3-1.7 2.3-.2-.7-.5-1.4-.7-2.2-.6.3-1 .5-1.1.5-1.2-.4-2.1-.7-3.3-1 0 .6.1.8.1 1.2-3.6-.3-6.4 1-9.7 2.1-1.5-.7-2.3 1-3.5 1.4-3.5-.8-3.7-3.3-4.9-5.3-.5-.9-1.8-1.5-2.9-2-.6-.3-1.6 0-2.3.2-.2.1.1 1 .1 1.6-.1 0-.4.1-.5 0-1.6-.9-3.3-.7-4.9-.1-1.7.6-3.2 1.5-4.8 2.2-3.1 1.2-8.5 4.6-11.9 2.6-.2-.1-.5-.3-.7-.5v.2c-.5-.7-.8-1.1-.9-1.2v-.1c-.3-.4-.6-.9-.9-1.3-.9.1-1.7.1-2.4.2 0-.1-.1-.3-.1-.4l2.1-.3c-.4-.4-.8-.8-1.4-1-.9-.3-2.3.7-3.4.4-1.2-.3-1.9-2-3-2.6-1.5-.8-4.1-.1-5.2-.8-.9-.6-1-2.2-1.7-2.6-1.4-1-.7-1.1-2.8-1.7-2.4-.6-6.4.5-8.9.7v.3c.4.2 1 .4 1.2.7s0 .8 0 1.1c-.5 0-1.1.1-1.4-.1-.8-.5-1.4-1.2-2.2-1.7-.1-.1-.5.1-.6.1.6.8 1.1 1.5 1.7 2.2l-.2.2-2-1c-1.3.8-2.4 1.6-3.7 2.4-.1-.4-.1-.7-.2-1.1-.7.1-1.4.1-2.2.2 0-.1-.1-.3-.1-.4 1.2-.3 2.5-.5 3.7-.8.1.1.1.2.2.3.2-.4.3-.8.6-1.3-2.8.5-5.4 1.1-8 1.4-1.5.2-3.1 0-4.6-.2-.8-.2-1.5-.9-2-1.6.6.1 1.1.3 1.7.4.1-.1.2-.3.3-.4-1.2-.7-2.4-1.3-3.5-2 .2-.1.4-.3.6-.4.4-.5.8-.9 1.4-1.6-1-.1-1.7-.2-2.3-.3.3-.5 1.1-1.4.8-1.6-.6-.6-1.7-.8-2.7-1.3l1-1c-3.8.3-7.4 0-10.6 1.8-2.1-1.6-4.1.3-6.8 0 1.2.8 2.1 1.4 2.9 1.9-3.5-.6-3.8-.9-3.6-2.1-1.8.3-2.8.7-4.6 1m122 30.5c-1.6.7-2.9 1.7-4.3 2.6-.3.2-.6.4-.8.4-2.1 0-4 .3-5.9.8h-3.5c6.3-2 12.6-4 19-6 .6-.2 1.3-.2 2-.4 0 .1.1.3.1.4-2.3.7-4.6 1.3-6.6 2.2zm930.1-21.6c.1-.4 0-1.3.4-1.4 1.2-.4 2.5-.4 3.7-.5.1 0 .2.7.3.9-1.5.3-2.8.6-4.4 1zm91.6 21.6c-1.6.7-2.9 1.7-4.3 2.6-.3.2-.6.4-.8.4-2.1 0-4 .3-5.9.8h-3.5c6.3-2 12.6-4 19-6 .6-.2 1.3-.2 2-.4 0 .1.1.3.1.4-2.3.7-4.5 1.3-6.6 2.2zm14.2-17h4c-.7.2-1.3.5-2 .7 1.1.9 2.2 1.8 3.2 2.6-2.6.1-2.6.1-5.2-3.3zm27.3-1.5c-1.9-1.7-1.9-1.8-.5-2.5.3.5.6 1.1 1.1 1.9 0 .1-.3.3-.6.6zm233.1-11.9h4c-.7.2-1.3.5-2 .7 1.1.9 2.2 1.8 3.2 2.6-2.6.1-2.6.1-5.2-3.3zm26.9-1.1c-1.9-1.7-1.9-1.8-.5-2.5.3.5.6 1.1 1.1 1.9 0 .1-.3.3-.6.6zm8.8-.5c-.2-.4-.4-.9-.6-1.4-.9-.1-1.6-.4-2.2-.8 2.7-.3 3.5.3 2.8 2.2zm3.9-.1h-2.4c-.8-1.3-.8-1.5 1-1.5-.4.2-.6.4-.7.6.8.2 1.5.4 2.2.6 0 .1-.1.2-.1.3zm64 9.3c-1.5-.5-2.9-.9-4.2-1.4 0-.1.1-.2.1-.3 1.3.2 2.6.4 4.1.6v1.1zm32.2 1c-.6-.2-1.1-.4-2.1-.9 1.4-.2 2.3-.4 3.3-.6.1.1.1.2.2.3-.5.5-.9.8-1.4 1.2zm65-20.2v-.2c1.3-.1 2.5-.3 4.2-.5 0 0 .2.4.3.7h-4.5zm18.5-1.4c.9-.4 1.9-.8 3.5-1.4-.3 1-.3 2-.7 2.1-.8.2-1.9 0-2.8-.1v-.6zm5.3 3.4c-1.6-.2-2.9-.5-4.1-.7v-.5c1.3-.4 2.6-.7 4.1-1.1v2.3zm9.9.6c-.7-.9-1.1-1.3-1.2-1.5.4-.7.6-1.2 1-1.9-2 .1-3.6.2-5.1.3 0-.2-.1-.4-.1-.5 2-.3 3.9-.6 6.2-.9-.3 1.7-.5 2.9-.8 4.5zm8.8-3.2h.1-.1zm0 0c-.6-.2-1.1-.4-1.5-.5-.3-.2-.6-.3-.9-.3-.1-.2-.3-.4-.4-.5 1-.2 2.3.1 3 1-.1.1-.1.2-.2.3zm27.8 8c.1-.4 0-1.3.4-1.4 1.2-.4 2.5-.4 3.7-.5.1 0 .2.7.3.9-1.6.3-2.9.6-4.4 1zm91.6 21.6c-1.6.7-2.9 1.7-4.3 2.6-.3.2-.6.4-.8.4-5 0-9.1 1.8-13.3 3.5-3.4 1.3-6.7 2.9-10.7 3.1l-.3-.3c1.5-.6 3-1.2 4.5-1.9l.3.3c.1-.5.2-.9.2-1.2.8-.1 1.4 0 2-.2 8.9-2.8 17.8-5.6 26.8-8.5.6-.2 1.3-.2 2-.4 0 .1.1.3.1.4-2.2.7-4.5 1.3-6.5 2.2zm14.8-17.3h4c-.7.2-1.3.5-2 .7 1.1.9 2.2 1.8 3.2 2.6-2.6.1-2.6.1-5.2-3.3zm26.7-1.2c-1.9-1.7-1.9-1.8-.5-2.5.3.5.6 1.1 1.1 1.9 0 .1-.3.3-.6.6zm12.8-.9h-2.4c-.8-1.4-.8-1.5 1.3-1.5-.5.3-.7.5-.9.7.8.2 1.5.4 2.2.6-.2 0-.2.1-.2.2zm64.5-6.3c-.4-.1-1.2-.1-1.3-.3-.4-.6-.6-1.4-.8-2.1.2-.1.5-.2.7-.2.6.5 1.3 1 1.7 1.5.1.2-.2.7-.3 1.1z'/%3E%3C/g%3E%3C/svg%3E");
            --divider-top-size: 1362px 100%;
            --divider-top-height: 67px;
            --divider-top-offset-x: 0px;
            --divider-top-color: #000000;
            --divider-top-opacity: 1;
            --divider-top-flip: scale(1, -1);
            --divider-top-layers-pin-factor: 0;
            --divider-top-filter: none;
            --divider-bottom-image: url("data:image/svg+xml,%3Csvg id='comp-llkj486z-bottom' preserveAspectRatio='xMidYMax slice' data-bbox='-0.001 205.493 1920.001 94.507' viewBox='-0.001 205.493 1920.001 94.507' height='100%25' width='100%25' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cdefs%3E%3Cstyle%3E%23comp-llkj486z-bottom %7B fill: %23000000; %7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cpath d='M0 300h1920v-58.8l-1 .2c-.6.2-1.2-.6-1.8-.4l-.3-.3c.7-.4 1.3-.9 2-1.3v-1.5c-1-.2-1.8-.3-2.7-.5V236c.3.1.4.2.6.2l2.1.6v-2.1c-.1-.3-.3-.6-.4-.8v.1l-.1-.1c-.6-.2-1.3-.4-1.9-.6-.5 1-1 2.1-1.5 3.3-1.2-1.7-1.2-1.7 1.3-5.1.8.9 1.4 1.7 2.1 2.4h.1c0-.5 0-1-.1-1.5-.4-2-3-1.8-4.8-2.7 1.1-.6 2.2-1.2 1.1-2.4-.5.2-.9.4-1.3.6-.1-.1-.1-.2-.2-.3.7-.2 1.4-.4 2.2-.6.8 1.2-.1 2.6 1.7 3.3-.4-1.5-.7-2.9-1.4-4.3-.2-.5-1.4-.7-2.3-1.1 0-.2.1-.6.2-1.2-1.3.4-2.5.7-3.8 1.1.3.3.6.5.7.6l-1.4 1.4c-.4-.2-1.2-.7-2-1.2-.1-.2-.1-.3-.2-.5-1.1.8-2.1 1.6-3.1 2.4l.3.3c-.4-.2-.9-.3-1.5-.5-.1.7-.3 1.3-.4 2-.4-.1-.7-.1-.9-.2-1.3-1.5-2.5-.8-3.4.3-1.1 1.2-1.9 2.6-2.9 3.9-.6-.3-1.4-.7-2.4-1.3-.5 1.6-2 2.1-3.7 2.3-1.3.1-1.6.7-1.1 1.6.1.3 0 .6-.1 1h-.5c-.1-.4-.2-.8-.3-1.5-.4.4-.6.7-.8 1-.7-.3-1.3-.5-2.2-.9.4-.2.7-.4 1.2-.7-.9-.3-1.7-.6-2.5-.9-2.1.9.4 2.2-.6 3.4-.5-.8-.9-1.5-1.3-2.2-.1.1-.2.3-.2.4-1.7-.3-3.3-.5-5-.8-.1.1-.1.2-.2.4l1 1c0 .1-.1.3-.1.4-1.2-.2-2.4-.3-3.9-.5-1.4.7.1 1.2 1 1.9-.7.2-1.1.3-1.2.3-.9-.8-1.7-1.4-2.7-2.3-.7 2.2-1.1 2.3-3.1 1.6-.3.3-.6.6-.9 1-3.2-1.5-2.3 1.4-3.6 1.9 1.6 2.4 1.5 3.2-.1 4.2-.3-.7-.5-1.4-.9-2-.5-.6-1.3-.9-1.5-1.5 0-.5 0-.9-.1-1.4-.2-.9-.6-1.8-.9-2.7s-.9-1.5-2.2-1.5c-.6 0-1.1-.4-1.6-.5-1 .8-2 1.6-3.3 2.6-1.7-2.3-2.6-4.5-2.7-6.7-.1-1.7-1.6-2.5-3.7-1.9-.1 0-.4 0-.5-.1v5.7c-.1-1.8-.2-3-.3-3.2-1.1 1.2-3.1 1.6-2.9 3.4.1 1.2-.6 2.4-1 3.6-1.3-.3-2.2-.6-3.3-.8.1.6.2 1.1.3 1.5h-.4c-.9-1.8-2.5-2.2-4.9-2-.5 0-1 .1-1.6.1 1.2.2 1.5.9 1 2.2-.2-.4-.4-.9-.6-1.4-.8-.1-1.8-.2-2.7-.4 0-.2.1-.3.1-.5h.9c-.7-.1-1.4-.4-2-1-.3-.3-1.3-.1-1.6-.1-.3 1.1-.5 2-.8 2.9-.2 0-.5 0-.7-.1 0-.5.1-.9.1-1.6-.7-.2-1.8-.7-2.4-.5-2.1.8-.9 2.4-1 3.6l-.5.1c-.2-.8-.5-1.5-.8-2.4-.4.6-.7 1.2-1.1 1.7.1 0 .2-.1.4-.1.3.7.5 1.4.9 2.4-1-.3-1.4-.4-1.8-.5-.6 2.3-2.3 2.3-4.8 1.5.2.4.4.9.7 1.4-.1.1-.3.2-.4.3-.9-.7-1.7-1.4-2.7-2.2-.4.4-.8 1-1.2 1.5-.5-.6-1-1.2-1.8-2.1v1.7c0 .6-.2 1.1-.3 1.7h-.4c-.3-1.2-.7-2.4-1.1-3.7-1.2 1-2.1 1.8-3.2 2.7-.4-.2-.9-.4-1.2-.6.9-.5 1.7-1.1 2.7-1.6-1.3-1.2-2.7-.8-4-.7-1.1-1.3-3.9-1.4-5-.2-.6.3-1.3.6-1.8.9-.9-.7-1.9-1.3-3.2-2.2 1 .3 1.7.5 2.5.7s1.6.4 2.5.6c-.5-.3-.9-.8-1.5-1-.9-.3-1.8-.5-2.7-.7-1.5-.4-2.9-.4-3.5 1.1-.5-.3-1-.6-1.6-.9-.5.9.2 2.3-1.7 2.3-.2-.7-.5-1.4-.7-2.2-.6.3-1 .5-1.1.5-1.2-.4-2.1-.7-3.3-1 0 .6.1.8.1 1.2-3.6-.3-6.4 1-9.7 2.1-1.5-.7-2.3 1-3.5 1.4-3.5-.8-3.7-3.3-4.9-5.3-.5-.9-1.8-1.5-2.9-2-.6-.3-1.6 0-2.3.2-.2.1.1 1 .1 1.6-.1 0-.4.1-.5 0-1.6-.9-3.3-.7-4.9-.1l-18.1 3.6c.1-.3.3-.5.4-.9-1.4.1-2.6.2-3.6.3l1.5 1-4.9 1c-.3-.1-.5-.1-.8-.3v.3c-1.2-.2-2.2-.4-3.2-.5v-.4c.5-.1.9-.3 1.4-.4-.5-.3-1-.6-1.6-.8-.1 0-.3 0-.4-.1-1.2-.1-3.1.6-4.1-.2-1.7-1.2-1.3-2.6-1.5-4.5-.2-1.6.5-3.6-.9-4.9-1-.8-10.5.3-10.5.4v.3c.4.2 1 .4 1.2.7s0 .8 0 1.1c-.5 0-1.1.1-1.4-.1-.8-.5-1.4-1.2-2.2-1.7-.1-.1-.5.1-.6.1.6.8 1.1 1.5 1.7 2.2l-.2.2-2-1c-1.3.8-2.4 1.6-3.7 2.4-.1-.4-.1-.7-.2-1.1-.7.1-1.4.1-2.2.2 0-.1-.1-.3-.1-.4 1.2-.3 2.5-.5 3.7-.8.1.1.1.2.2.3.2-.4.3-.8.6-1.3-2.8.5-5.4 1.1-8 1.4-1.5.2-3.1 0-4.6-.2-.8-.2-1.5-.9-2-1.6.6.1 1.1.3 1.7.4.1-.1.2-.3.3-.4-1.2-.7-2.4-1.3-3.5-2 .2-.1.4-.3.6-.4.4-.5.8-.9 1.4-1.6-1-.1-1.7-.2-2.3-.3.3-.5 1.1-1.4.8-1.6-.6-.6-1.7-.8-2.7-1.3l1-1c-3.8.3-7.4 0-10.6 1.8-2.1-1.6-4.1.3-6.8 0 1.2.8 2.1 1.4 2.9 1.9-3.5-.6-3.8-.9-3.6-2.1-1.7.3-3.3.6-5 1-.8-1-1.6-2.1-2.5-3.1-.2.5-.3.8-.5 1.1-.1 0-.2-.1-.4-.1.2-.7.4-1.4.7-2.2-1.2-.4-2.4-.6-3.6-.6-.2.6-.4 1-.5 1.3-1.6.1-3 .2-4.6.3.2-.5.4-.9.7-1.1-.9.2-1.7.5-2.6.7 1 .6 2 1.1 3 1.7 0 .1 0 .3.1.4-1.3-.1-2.6-.1-4-.2.6.5 1.2 1.1 1.8 1.6-2.5-.6-3.7-1.4-3.7-2.6-.8.2-1.6.5-2.4.7-.1-.4-.2-.6-.4-1l-2.1.6c.2.5.4 1 .5 1.5.1.4-.3.9-.6 1.3 0 .1-.7 0-.8-.1-.1-.4-.1-.9 0-1.3 0-.3.3-.5.4-.7-.4-.1-.8-.2-1.1-.3-2 .4-3.9.9-5.2 2.5-.4.4-1.3.6-2 .8-.1-.1-.2-.3-.4-.4.5-.4 1.1-.7 1.6-1.1-2.2-.6-7.1.5-7.6 1.3-2.4.3-4.6.4-6.8.8-3.4.6-6.7 1.2-10.1.1-.3-.1-.8 0-1.1.1-3.6 1.2-7.2 2.3-10.7 3.6-2.1.8-4.1 1.7-6.1 2.6-.3.1-.8.4-1.1.3-3.5-.9-6.3.3-9 1.8-1 .5-1.9.7-3.1.8-1.7.1-3.4.4-5 .9-1.1.3-1.9 1.1-3.2 1.8-4-1.1-7.4 1.5-11.7 1.8.6 1.1 1.1 2.1 1.6 3-1.7 1.3 1.2 1.8.8 3l-.9-.6c-.8-.5-1.4-.7-2.4-.1-1.2.8-2.7.9-4.4.8-2.7-.2-5.5-.1-8.3-.2-.7 0-1.3-.4-1.9-.6 0-.2.1-.5.1-.7-2.9.2-5.8.4-8.6.6-.3 0-.6 0-.8-.1-2.6-1.7-5.4-1.6-8.4-.8h-.5c-2.4-1.4-5.4-1.2-8.1-1.5-2.5-.3-4.9-.9-7-2.1-.5-.3-1.2-.5-1.8-.4-3.7.1-7.3.3-10.9.5-2.5.2-5 .5-7.4.8-.4 0-.9.1-1.1 0-3-1.8-6.2-1.3-9.5-.6-1 .2-1.8.1-2.9-.1-1.8-.5-3.7-.8-5.5-.6-.1 0-.1-.1-.2-.1l.1.1-1.5.3c-.4-.4-.7-.9-1-1.4-.8.1-1.6-.2-2.2-.7-.5-.1-1.1-.4-1.5-.7-.6-.4-1.1-1-1.6-1.5l-1.8-.9c.2-.1.3-.2.5-.2-1.5-.8-4.5-.8-6.1-.4 0 0-.1 0-.1-.1h-.3c.1 0 .2 0 .3-.1-1-.6-1.9-1.4-3.3-1.4-.3 1.1-.5 2-.8 2.9-.2 0-.5 0-.7-.1 0-.5.1-.9.1-1.6-.7-.2-1.8-.7-2.4-.5-2.1.8-.9 2.4-1 3.6l-.5.1c-.2-.8-.5-1.5-.8-2.4-.4.6-.7 1.2-1.1 1.7.1 0 .2-.1.4-.1.3.7.5 1.4.9 2.4-1-.3-1.4-.4-1.8-.5-.6 2.3-2.3 2.3-4.8 1.5.2.4.4.9.7 1.4-.1.1-.3.2-.4.3-.9-.7-1.7-1.4-2.7-2.2-.4.4-.8 1-1.2 1.5-.5-.6-1-1.2-1.8-2.1v1.7c0 .6-.2 1.1-.3 1.7h-.4c-.3-1.2-.7-2.4-1.1-3.7-1.2 1-2.1 1.8-3.2 2.7-.4-.2-.9-.4-1.2-.6.9-.5 1.7-1.1 2.7-1.6-1.3-1.2-2.7-.8-4-.7-1.1-1.3-3.9-1.4-5-.2-.6.3-1.3.6-1.8.9-.9-.7-1.9-1.3-3.2-2.2 1 .3 1.7.5 2.5.7s1.6.4 2.5.6c-.5-.3-.9-.8-1.5-1-.9-.3-1.8-.5-2.7-.7-1.5-.4-2.9-.4-3.5 1.1-.5-.3-1-.6-1.6-.9-.1.2-.2.5-.2.8-1 .2-1.9.4-2.9.6-.8.2-1.4.6-2.1.9l-.7-.7c-.2.5-.4.9-.5 1.1.6.4 1.2.7 2.1 1.2-1.3.2-2 .3-2.6.4-1.7-2.1-3.4-4.3-5.3-6.6-.2.5-.3.8-.5 1.1-.1 0-.2-.1-.4-.1.2-.7.4-1.4.7-2.2-1.2-.4-2.4-.6-3.6-.6.1-.3.3-.7.5-1.1-1.9.4-3.7.5-4.8 1.6-.9.2-1.7.5-2.6.7-.1-.1-.2-.1-.3-.2l-.4.4c-.5.1-.9.2-1.4.4-.1-.7-.2-1.1-.3-1.6-.4.7-.5 1.3-.5 1.8-.8.2-1.6.5-2.4.7-.1-.4-.2-.6-.4-1l-2.1.6c-.2-.5-.4-1.1-.6-1.6-1.5.3-2.6.5-3.8.7 0 .2-.1.3-.1.5.9.2 1.9.5 2.9.8-2 .4-3.9.9-5.2 2.5-.4.4-1.3.6-2 .8-.1-.1-.2-.3-.4-.4.5-.4 1.1-.7 1.6-1.1-2.2-.6-7.1.5-7.6 1.3-2.4.3-4.6.4-6.8.8-3.4.6-6.7 1.2-10.1.1-.3-.1-.8 0-1.1.1-3.6 1.2-7.2 2.3-10.7 3.6-2.1.8-4.1 1.7-6.1 2.6-.3.1-.8.4-1.1.3-3.5-.9-6.3.3-9 1.8-1 .5-1.9.7-3.1.8-1.7.1-3.4.4-5 .9-1.1.3-1.9 1.1-3.2 1.8-4-1.1-7.4 1.5-11.7 1.8.6 1.1 1.1 2.1 1.6 3-1.7 1.3 1.2 1.8.8 3l-.9-.6c-.8-.5-1.4-.7-2.4-.1-1.2.8-2.7.9-4.4.8-2.7-.2-5.5-.1-8.3-.2-.7 0-1.3-.4-1.9-.6 0-.2.1-.5.1-.7-2.9.2-5.8.4-8.6.6-.3 0-.6 0-.8-.1-2.6-1.7-5.4-1.6-8.4-.8h-.5c-2.4-1.4-5.4-1.2-8.1-1.5-2.5-.3-4.9-.9-7-2.1-.5-.3-1.2-.5-1.8-.4-3.7.1-7.3.3-10.9.5-2.5.2-5 .5-7.4.8-.4 0-.9.1-1.1 0-3-1.8-6.2-1.3-9.5-.6-1 .2-1.8.1-2.9-.1-1.8-.5-3.7-.8-5.5-.6-.1 0-.1-.1-.2-.1l-1.4-.7c0-.2-.1-.4-.1-.6-.2.1-.4.2-.6.2l-.4-.2c-.1-.2-.2-.5-.3-.7l-.6.3-2.8-1.4c-.3-.3-.5-.6-.8-.8-.7-.6-1.5-1.3-2.2-1.1-1.6-.8-4.7-.8-6.3-.4-1-.6-1.9-1.4-3.3-1.4-.3 1.1-.5 2-.8 2.9-.2 0-.5 0-.7-.1 0-.5.1-.9.1-1.6-.7-.2-1.8-.7-2.4-.5-2.1.8-.9 2.4-1 3.6l-.5.1c-.2-.8-.5-1.5-.8-2.4-.4.6-.7 1.2-1.1 1.7.1 0 .2-.1.4-.1.3.7.5 1.4.9 2.4-1-.3-1.4-.4-1.8-.5-.6 2.3-2.3 2.3-4.8 1.5.2.4.4.9.7 1.4-.1.1-.3.2-.4.3-.9-.7-1.7-1.4-2.7-2.2-.4.4-.8 1-1.2 1.5-.5-.6-1-1.2-1.8-2.1v1.7c0 .6-.2 1.1-.3 1.7h-.4c-.3-1.2-.7-2.4-1.1-3.7-1.2 1-2.1 1.8-3.2 2.7-.4-.2-.9-.4-1.2-.6.9-.5 1.7-1.1 2.7-1.6-1.3-1.2-2.7-.8-4-.7-1.1-1.3-3.9-1.4-5-.2-.6.3-1.3.6-1.8.9-.9-.7-1.9-1.3-3.2-2.2 1 .3 1.7.5 2.5.7s1.6.4 2.5.6c-.5-.3-.9-.8-1.5-1-.9-.3-1.8-.5-2.7-.7-1.5-.4-2.9-.4-3.5 1.1-.5-.3-1-.6-1.6-.9-.5.9.2 2.3-1.7 2.3-.2-.7-.5-1.4-.7-2.2-.6.3-1 .5-1.1.5-1.2-.4-2.1-.7-3.3-1 0 .6.1.8.1 1.2-3.6-.3-6.4 1-9.7 2.1-1.5-.7-2.3 1-3.5 1.4-3.5-.8-3.7-3.3-4.9-5.3-.5-.9-1.8-1.5-2.9-2-.6-.3-1.6 0-2.3.2-.2.1.1 1 .1 1.6-.1 0-.4.1-.5 0-1.6-.9-3.3-.7-4.9-.1-1.7.6-3.2 1.5-4.8 2.2-2.3.9-7.7 4.1-10.2 3.6-.7-.2-1.3-.6-1.8-1 0 .1 0 .2-.1.3-.2-.2-.3-.4-.4-.6-.4-.2-.7-.4-1.2-.5-1.3-.2-4.4-.7-6.3-.3v.9c-1.2-.2-2.2-.4-3.2-.5v-.4c.5-.2 1-.3 1.6-.5-.8-.9-2.4.1-3.7.3-.1-1.2-.3-3.3-1.1-4.7-.5-.1-.9-.2-1.4-.3 0-.1 0-.3.1-.4.2 0 .4-.1.6-.1-.4-.3-.9-.5-1.5-.4.2-.1-.2-3.1-.3-3.4-.9-.2-1.7-.6-2.6-1.1-3.1.2-6.4.5-9.7.8v.3c.4.2 1 .4 1.2.7s0 .8 0 1.1c-.5 0-1.1.1-1.4-.1-.8-.5-1.4-1.2-2.2-1.7-.1-.1-.5.1-.6.1.6.8 1.1 1.5 1.7 2.2l-.2.2-2-1c-1.3.8-2.4 1.6-3.7 2.4-.1-.4-.1-.7-.2-1.1-.7.1-1.4.1-2.2.2 0-.1-.1-.3-.1-.4 1.2-.3 2.5-.5 3.7-.8.1.1.1.2.2.3.2-.4.3-.8.6-1.3-2.8.5-5.4 1.1-8 1.4-1.5.2-3.1 0-4.6-.2-.8-.2-1.5-.9-2-1.6.6.1 1.1.3 1.7.4.1-.1.2-.3.3-.4-1.2-.7-2.4-1.3-3.5-2 .2-.1.4-.3.6-.4.4-.5.8-.9 1.4-1.6-1-.1-1.7-.2-2.3-.3.3-.5 1.1-1.4.8-1.6-.6-.6-1.7-.8-2.7-1.3l1-1c-3.8.3-7.4 0-10.6 1.8-2.1-1.6-4.1.3-6.8 0 1.2.8 2.1 1.4 2.9 1.9-3.5-.6-3.8-.9-3.7-2.1-2.7.5-5.5 1-8.3 1.6-.4.1-.7.2-1 .4 1.1-.1 2.2-.1 3.4-.2.2 0 .4-.3.6-.4 1.3-.9 3.7-.4 4.5 1.2-.8-.3-1.5-.4-2.1-.7-1-.4-1.6-.5-2.3.4-.8 1.1-1.3 1.3-2.5 1 .3-.3.5-.6.7-.9-1.2.9-1.9.1-2.6-.3-.3.1-.5.3-.8.4l-.7-.7c-.2.5-.4.9-.5 1.1.6.4 1.2.7 2.1 1.2-1.3.2-2 .3-2.6.4-1.7-2.1-3.4-4.3-5.3-6.6-.2.5-.3.8-.5 1.1-.1 0-.2-.1-.4-.1.2-.7.4-1.4.7-2.2-2.6-.8-5.3-.8-8-.1-2.6.7-5.2 1.4-7.8 2.2-.1-.4-.2-.6-.4-1-3 1.1-6.8.9-8.9 3.4-.4.4-1.3.6-2 .8-.1-.1-.2-.3-.4-.4.5-.4 1.1-.7 1.6-1.1-2.2-.6-7.1.5-7.6 1.3-2.4.3-4.6.4-6.8.8-3.4.6-6.7 1.2-10.1.1-.3-.1-.8 0-1.1.1-3.6 1.2-7.2 2.3-10.7 3.6-2.1.8-4.1 1.7-6.1 2.6-.3.1-.8.4-1.1.3-3.5-.9-6.3.3-9 1.8-1 .5-1.9.7-3.1.8-1.7.1-3.4.4-5 .9-1.1.3-1.9 1.1-3.2 1.8-4-1.1-7.4 1.5-11.7 1.8.6 1.1 1.1 2.1 1.6 3-1.7 1.3 1.2 1.8.8 3l-.9-.6c-.8-.5-1.4-.7-2.4-.1-1.2.8-2.7.9-4.4.8-2.7-.2-5.5-.1-8.3-.2-.7 0-1.3-.4-1.9-.6 0-.2.1-.5.1-.7-2.9.2-5.8.4-8.6.6-.3 0-.6 0-.8-.1-2.6-1.7-5.4-1.6-8.4-.8h-.5c-2.4-1.4-5.4-1.2-8.1-1.5-2.5-.3-4.9-.9-7-2.1-.5-.3-1.2-.5-1.8-.4-3.7.1-7.3.3-10.9.5-2.5.2-5 .5-7.4.8-.4 0-.9.1-1.1 0-3-1.8-6.2-1.3-9.5-.6-1 .2-1.8.1-2.9-.1-2.9-.8-5.9-1.1-8.8.5-3.4-2.3-7.8-.7-11.8-1.6v3.2c-2.1.9.3 2.1-.5 3.1-.2-.3-.4-.5-.6-.8-.5-.7-1-1.1-2.3-.8-1.1.2-2.5.4-3.5.1-2.2-.6-3.7 0-5.7 1.4.4.7.9 1.7 1.4 2.6.1.1.1.3.1.4-1.1 1.4 0 2.7.2 4 .3 1.7.1 1.8-2 1.8-.3 0-.7.1-1.2.2.7.9 1.3 1.7 2 2.7-1-.4-1.7-.7-2.7-1 0-.1.1-.4.1-.8 0-.7-.3-1.1-1.4-1.1-1.9.1-3.8.2-5.7.1-1.1 0-2.2-.3-3.5-.6.7 1.7 1.9 2.3 3.5 1.9.2.9.4 1.7.5 2.5-.1.1-.3.2-.4.3-1.1-.9-2.3-1.7-3.6-2.7-.4.5-.9.9-1.1 1.1-2.1.1-3.9.2-5.8.3.5-.7 1-1.5 1.5-2.1 1.1.4 1.8.7 2.5 1 0-.7.1-1.2.1-1.8h-10.9c.1.3.1.7.1.7h6.9c.1.1.2.3.2.4-1.6.7-3.2 1.4-5 2.3-.2-.9-.4-1.6-.5-2.2-1.3 2.4-4.7.2-6.3 2-.8-1-1.4-1.8-2.1-2.6.5-.2.9-.3 1.4-.5l-.1-.4c-1.3.2-2.7.3-4 .5v.5c.7 0 1.5.1 2.2.1-1.2 1.1-2.2 1.1-4.8-.1.4-.2.8-.5 1.3-.8-.7 0-1.2-.2-1.8-.1-.4.1-1 .4-.9.6.3 1.1.7 2.2 1.1 3.4-1.2 0-2.8-.2-4.2 0-2.4.4-4.5-.2-6.7-.5-2.3-.4-4.7-.3-6.9-.7-1.6-.3-3-1-4.6-1.5-.6-.2-1.2-.4-1.8-.4-4 .2-8 .5-12 .8-2.1.2-4.2.6-6.3.9-.4.1-.9.2-1.1.1-3.1-1.7-6.2-1.1-9.5-.5-.9.2-1.9.1-2.8 0-3-.5-6-1-8.8.8-3.3-2.3-7.5-.6-11.8-1.4 1.6-.7 2.7-1.2 3.9-1.6 1.3-.5 2-2.1 1.1-2.9-1.2-1.1-2.6-2.2-3.8-3.3-.7-.6-1.9-1.1-.5-2.1l-1.2-.6c.5-.4.8-.8 1.3-1 .8-.5 1.7-.9 2.6-1.3 1.8-.8 2-1.8.9-3.1-2.2-2.4-2.2-2.4-5.6-3.3.5-.5 1-1 1.3-1.4-.8-.4-1.7-.7-1.7-.9.2-1.4-1.3-2.1-2.4-2.4-1.6-.4-1.7-1.1-1.8-2 0-.2-.2-.4-.3-.7-.3.1-.6.2-1.2.3 1.2-2.8-2.2-2.3-3.1-3-3.1 1.3-6 2.6-9 3.9 1 .4 1.8.6 2.3 1 .2.1-.4.8-.6 1.3-1.5-.6-2.8-1.4-4.4-1 1 .6 1.9 1 2.8 1.5 0 .1 0 .2-.1.3-.9-.1-1.8-.2-2.4-.3-.7 1.1-1.4 2.1-1.8 2.7-1 0-1.5-.1-1.9 0-.5.1-.9.3-1.4.4v-.7c-1.8.7-3.6 1.3-5.5 2-1.7.6-3.4.8-4.9-.4.6-.1 1.2-.2 1.8-.2v-.4l-3.9-1.2c.1-.7.2-1.2.3-2-.9.1-1.5.2-1.8.3-.3-.6-.3-1.5-.9-1.8-.5-.3-1.6-.1-2.6-.1 0-.1.1-.6.3-1.4-3.2 1.5-6.8 2.2-8.8 4.9-2.8-.9-3.7 1.5-6.2 2 1.5.4 2.5.6 3.6.9-.1.2-.2.3-.2.5-1.3-.7-3.5.6-4.2-1.3-3.1 1.8-6.1 3.6-9.5 5.6l2.6 1.3c-.9.3-1.4.6-2.1.8-2.6-1.4-5.3-2.9-8.1-4.5 0 .4-.1.7-.1 1h-.3c-.2-.7-.3-1.4-.5-2.1-6.2.1-9.3 3.9-13.5 6.6l-.8-.8c-1.3.8-2.7 1.5-3.8 2.4-1 .9-1.7 2-2.6 3.1-.5.6-1 1.1-1.5 1.6-.2-.1-.4-.2-.5-.3.3-.5.6-1 1-1.6-3 .3-4.5 2.2-6.5 3.4.2.4.4.7.6 1-1.9-.4-3.3.3-4.7 1.1-1.8.9-4.1.8-6.1-.7 1.8.1 3.4.3 5.2.4-.9-1.2-1.5-2.1-2.2-3.1.4-.3.7-.5 1-.7l1.2 2.4h.7c.7-1 1.3-1.9 2-2.9.4-.2 1-.3 1.1-.6.5-1.2 1.2-2.5-.1-3.7-.3-.3-.4-.8-.6-1.3 1.6.4 2.9.3 3.3-1.3.2.1.3.2.5.4-.8 1-1.7 2-2.5 3l.6.3c1-1.2 2.2-2.3 3-3.6.3-.5-.2-1.3-.3-2h-.5c.3-.1.5-.2.8-.4.2-.1.5-.2 1-.5-1.3-.5-2.5-.9-3.7-1.4-.1.4-.2.6-.2.8-.7.1-1.4.1-2.4.2v-2.4c-1.3-.1-2.8-.1-4.3-.2-.1.1-.1.3-.2.4-.1-.4-.3-.7-.4-1.2-.7.4-1.4.7-2.4 1.3-.2-.8-.3-1.5-.5-2.3-2.8-.4-5.5-.1-8 1.3-.2-.9-.3-1.7-.5-2.6-1.8.7-3.1.4-4.4-.4-1-.6-1.9-.8-2.5.4-.1.2-.7.3-1.2.3.3-.3.7-.7 1.2-1.3-.8.1-1.2.2-1.6.3-.2-.6-.3-1.2-.6-1.9.5.1.9.1 1.5.2-.3-.7-.6-1.4-1.2-2.6-1.2 1.1-2.1 1.9-3 2.7-.1 0-.2-.1-.2-.1.4-.7.8-1.4 1.2-2.2-.2.1-.4.1-.5.2l-2.7-3.3c-.2 0-.3.1-.5.1-.1.4-.2.8-.4 1.8-1-1.1-1.7-1.8-2.6-2.9-1.5-.2-1.1.7-.9 1.6-1.4-.1-2.8-.2-4.5-.4 1.1-.5 1.9-.8 2.7-1.2.1.3.2.6.2.9h.5v-2.5c-2.3.9-2.7.8-3.3-.8-.5.1-1.1.1-1.7.2-.7-3.1-2.8-.2-4.1-.7-1.4 2.7-2.1 3.1-3.7 2.9.4-1.3.8-2.6 1.1-3.6 1-1.2 1.9-2.3 3-3.2 1.7-1.5-.4-2.6-.6-4h-4.6c1-2.5 2.5-4.5 4.6-6.2 1.3-1.1.8-2.2-.6-3.2-1.5-1.1-3.3-1.3-5.1-1.8-.9-.3-2.1-.5-1.4-1.7-.5-.1-.8-.1-1.3-.2 0-.1-.1-.3 0-.4.8-1 1.5-2.1 2.4-3.1 1.1-1.1.7-2-.5-2.6-2.2-1.1-4.2-2.9-7.4-1.3.3-.9.5-1.6.7-2.2-.1 0-.3-.1-.4-.1-.3.2-.6.4-1.1.7-.8-1.2-1.9-2-3.7-2-1.5 0-2.5-.4-3.1-1.4-.1-.2-.9-.2-1.4-.2-.4-2.5-3.2-.8-4.3-1.3-2.2 2.1-4.3 4.1-6.5 6.3 1.2 0 2-.1 2.7.1.2.1.1.9.2 1.3h-4.2c-.1 0-.2.5-.2.5 1.1.2 2.1.3 3.1.5 0 .1.1.2.1.3-.9.2-1.8.3-2.3.4-.1 1.3-.2 2.4-.3 3.7-.5-.3-.8-.4-1.2-.6-.4.4-.8.9-1.3 1.4-.2-.3-.5-.5-.5-.6.6-.7 1.4-1.4 1.9-2.1.2-.3-.1-.8-.2-1.5-1.7 2.1-3.1 4-4.7 5.8-.7.7-1.6 1.4-2.6 1.9-1.3.7-2.1.7-3.7.2l1.8-.6c0-.1-.1-.3-.1-.4h-4c-.4-.7-.6-1.2-.9-1.7-.6.2-1.2.5-1.7.6-.3-.5-.5-1.4-.9-1.4-1-.1-2.1.2-3.2.4 0-.1-.1-.5-.1-.8-1.1-.2-5.4 4.9-5.8 6.9-3.1 0-2.6 2.5-4.7 3.7 1.6-.1 2.7-.2 3.8-.3-2.2 1.4-3.4 1.5-4.4.6-1.7 2.2-3.3 4.5-5 6.8.1.1.2.1.3.2.3-.1.9-.2 1-.4.1-1.1 1.9-1.5 1.8-2.8-.1-.9 2.8-1.6 4-.9-.8.2-1.5.5-2.2.6-1 .2-1.5.6-1 1.4.1.2.2.6.2.8-.1.4-.3.8-.5 1.3-.3-.3-.6-.6-.9-1-.2 1.7-2.1 1.2-3.5 1.5.2.3.4.7.5.9.8-.1 1.5-.2 2.7-.3-.8.9-1.2 1.3-1.6 1.7-3.2-.5-6.4-1.1-9.6-1.6-.1.2-.1.4-.2.9-.5-.7-.8-1.1-1.2-1.7-5.7 1.9-6.7 6.4-9.1 10.2-.4-.2-.7-.3-1.1-.4-.8 1.2-1.8 2.4-2.4 3.6-.5 1.1-.5 2.2-.7 3.4-.1.7-.3 1.3-.5 2l-.7-.1c.1-.6.2-1.2.2-1.9-2.6 1.2-3.2 3.4-4.4 5.2 1.1.2 2.1.5 3.3.7-1.4 1-2.5 1.8-3.6 2.6-.1-.1-.2-.1-.3-.2l2.3-2.3c-.2-.2-.5-.4-.7-.5-1 .7-2.2 1.2-3.1 2-1 1-1.8 2.2-2.6 3.3-1.4 1.8-3.1 3.4-5.6 4.4-.4.2-.8.5-1 .9-1.2 2.6-2.6 3.4-6.6 3.6-.2-.7-.4-1.4-.7-2.3-.7.4-1.1.6-1.6.9 1.6-1.8.7-3.2-.7-4.7-.9-1-2.1-2-1.4-3.5.1-.3-.5-.9-.7-1.1-1.5.4-2.6.7-3.7 1.1-.1-.2-.2-.4-.3-.5.5-.2 1-.4 1.8-.7-.2-.5-.1-1.5-.6-1.8-2.1-1-3.3.6-4.8 1.4l-.3-.3c.8-.6 1.5-1.2 2.3-1.9-.8.1-1.6.1-1.9.2-.9.8-1.5 1.3-2.4 2.1-.3-.8-.4-1.1-.5-1.4-.8.2-1.4.3-2.1.5-.8-.6-1.5-1.1-2.4-1.7.3-.3.6-.6.8-.9-.1-.1-.2-.2-.4-.3-.5.4-1 .8-1.6 1.3-.9-1.2.1-2 1-3h-2.7c.5-.8.8-1.5 1.3-2.3-1.3.6-2.5 1.1-3.7 1.6l-.3-.3c1.1-.9 2.3-1.8 3.5-2.7-1.8-.2-3.1-.4-4.5-.6v-1.3c.5.3.9.6 1.4.7.6.1 1.2 0 1.9 0-.1-.4-.1-.9-.2-1.3-.2-.8-.2-1.7-.7-2.2-.8-.9-.7-2.3-2.7-2.6-1-.1-2.1-.5-3.3-.8 1.3-.6 2.2-1.3 1.2-2.5-.4.2-.9.4-1.3.6-.1-.1-.1-.2-.1-.3.6-.3 1.3-.5 1.9-.8.9 1.1.1 2.6 2 3.2-.5-1.3-.8-2.7-1.5-3.9-.4-.6-1.5-.9-2.4-1.3l-.3.3c.1-.5.1-1 .2-1.6-1.3.5-2.5.9-3.7 1.4.3.3.5.5.8.7-.5.2-.9.4-1.4.7.3.2.6.4.8.5l-.4.4c-.8-.5-1.6-.9-2.4-1.4-.1-.1-.2-.3-.3-.4-1 .9-2 1.8-3.2 2.8.1 0-.4-.1-1-.4-.1.7-.2 1.3-.2 2.1-.5-.1-1-.2-1.3-.4-1.1-1-2-.6-2.7.3-1.1 1.4-2 2.9-3 4.4-.5-.2-1.3-.6-2.2-1 0 .2.1.3.1.5-1.2.6-2.4 1.3-3.7 1.7-1.2.4-1.8.7-1.1 1.7.2.2 0 .6 0 .9h-.5c-.1-.4-.3-.8-.4-1.5-.3.4-.5.7-.8 1-.7-.2-1.4-.5-2.2-.8.3-.3.6-.5.9-.9-.9-.3-1.8-.5-3.2-.9.3 1.4.5 2.4.7 3.5h-.3c-.5-.7-.9-1.3-1.4-2-.1.1-.1.3-.2.4-1.7-.2-3.4-.3-5.1-.5 0 .1-.1.2-.1.3.4.3.7.6 1.1 1l-.1.4c-1.2-.1-2.4-.2-4-.3-1.4.8.2 1.2 1.2 1.8-.5.2-1 .4-1.1.4-1-.7-1.8-1.3-2.9-2.1-.4 2.2-1 2.4-2.9 1.7-.3.4-.5.7-.8 1.1-1.4-.5-2.5-.7-2.7.9 0 .4-.5.8-.8 1.2 1.7 2.1 1.8 2.9.5 3.9-1-1-2-2.1-3-3.2-.1-.4-.2-.9-.4-1.4-.3-.8-.6-1.5-.9-2.2-.4-1-1-1.8-2.6-1.6-.5 0-1-.3-1.5-.5-1 .9-1.9 1.8-3.1 2.8-1.9-2.3-3-4.5-3.4-6.9-.2-1.4-1.8-1.7-3.5-1.6-2.2.2-3.5 1.3-5.2 1.9-.6.2-1.5 0-2.2 0-.4 0-.9.1-1.7.2-.4-1-1-2.2-1.4-3.3-.5-1.4-1.5-1.9-3.3-1.5-2.4.6-5.2.8-5.8 3.4-.7-.7-1.2-1.2-1.9-1.8-.4 2-1.7 1.2-2.9 1-1 .7-2 1.4-3.4 2.4-.5.1-1.9-1-2.7.5-2.9-1.7-3 1.3-4.9 1.9 2.8 1.9 1.4 4.5 2.5 6.9-.7 0-1.3.1-1.8.1.1.1.2.1.2.2-.6.5-1.3 1-2.2 1.7-.2-.8-.2-1.1-.3-1.4-.4.1-.8.1-1.1.2-.4.1-.7.1-1 .2-.7-.6-1.5-1.2-2.2-1.8.3-.3.6-.5.9-.8-.1-.1-.2-.2-.4-.3l-1.5 1.2c-.2 0-.3-.1-.5-.1.4-.9.7-1.8 1.2-2.9-.6-.1-1.4-.2-2.2-.2.4-.6.8-1.3 1.3-2-1.3.4-2.5.9-3.8 1.3l-.3-.3c1.2-.8 2.4-1.6 3.8-2.5-1.8-.3-3.1-.6-4.5-.8V250c.3.1.4.2.6.2.9.2 1.7.4 2.6.7-.1-.6-.2-1.3-.3-1.9-.1-.4-.4-.8-.6-1.2 0-.5 0-1-.1-1.5-.4-2-3-1.8-4.8-2.7 1.1-.6 2.2-1.2 1.1-2.4-.5.2-.9.4-1.3.6-.1-.1-.1-.2-.2-.3.7-.2 1.4-.4 2.2-.6.8 1.2-.1 2.6 1.7 3.3-.4-1.5-.7-2.9-1.4-4.3-.2-.5-1.4-.7-2.3-1.1 0-.2.1-.6.2-1.2-1.3.4-2.5.7-3.8 1.1.3.3.6.5.7.6l-1.4 1.4c-.4-.2-1.2-.7-2-1.2-.1-.2-.1-.3-.2-.5-1.1.8-2.1 1.6-3.1 2.4l.3.3c-.4-.2-.9-.3-1.5-.5-.1.7-.3 1.3-.4 2-.4-.1-.7-.1-.9-.2-1.3-1.5-2.5-.8-3.4.3-1.1 1.2-1.9 2.6-2.9 3.9-.6-.3-1.4-.7-2.4-1.3-.5 1.6-2 2.1-3.7 2.3-1.3.1-1.6.7-1.1 1.6.1.3 0 .6-.1 1h-.5c-.1-.4-.2-.8-.3-1.5-.4.4-.6.7-.8 1-.7-.3-1.3-.5-2.2-.9.4-.2.7-.4 1.2-.7-.9-.3-1.7-.6-2.5-.9-2.1.9.4 2.2-.6 3.4-.5-.8-.9-1.5-1.3-2.2-.1.1-.2.3-.2.4-1.7-.3-3.3-.5-5-.8-.1.1-.1.2-.2.4l1 1c0 .1-.1.3-.1.4-1.2-.2-2.4-.3-3.9-.5-1.4.7.1 1.2 1 1.9-.7.2-1.1.3-1.2.3-.9-.8-1.7-1.4-2.7-2.3-.7 2.2-1.1 2.3-3.1 1.6-.3.3-.6.6-.9 1-3.2-1.5-2.3 1.4-3.6 1.9 1.6 2.4 1.5 3.2-.1 4.2-.3-.7-.5-1.4-.9-2-.5-.6-1.3-.9-1.5-1.5 0-.5 0-.9-.1-1.4-.2-.9-.6-1.8-.9-2.7-.3-.9-.9-1.5-2.2-1.5-.6 0-1.1-.4-1.6-.5-1 .8-2 1.6-3.3 2.6-1.7-2.3-2.6-4.5-2.7-6.7-.1-1.7-1.6-2.5-3.7-1.9-.1 0-.4 0-.5-.1v5.7c-.1-1.8-.2-3-.3-3.2-1.1 1.2-3.1 1.6-2.9 3.4.1 1.2-.6 2.4-1 3.6-1.3-.3-2.2-.6-3.3-.8.1.6.2 1.1.3 1.5h-.4c-.9-1.8-2.5-2.2-4.9-2-1.7.1-3.5.3-4.9-1-.3-.3-1.3-.1-1.6-.1-.3 1.1-.5 2-.8 2.9-.2 0-.5 0-.7-.1 0-.5.1-.9.1-1.6-.7-.2-1.8-.7-2.4-.5-2.1.8-.9 2.4-1 3.6l-.5.1c-.2-.8-.5-1.5-.8-2.4-.4.6-.7 1.2-1.1 1.7.1 0 .2-.1.4-.1.3.7.5 1.4.9 2.4-1-.3-1.4-.4-1.8-.5-.6 2.3-2.3 2.3-4.8 1.5.2.4.4.9.7 1.4-.1.1-.3.2-.4.3-.9-.7-1.7-1.4-2.7-2.2-.4.4-.8 1-1.2 1.5-.5-.6-1-1.2-1.8-2.1v1.7c0 .6-.2 1.1-.3 1.7h-.4c-.3-1.2-.7-2.4-1.1-3.7-1.2 1-2.1 1.8-3.2 2.7-.4-.2-.9-.4-1.2-.6.9-.5 1.7-1.1 2.7-1.6-1.3-1.2-2.7-.8-4-.7-1.1-1.3-3.9-1.4-5-.2-.5-.3-.9-.8-1.5-1-.9-.3-1.8-.5-2.7-.7-1.5-.4-2.9-.4-3.5 1.1-.5-.3-1-.6-1.6-.9-.5.9.2 2.3-1.7 2.3-.2-.7-.5-1.4-.7-2.2-.6.3-1 .5-1.1.5-1.2-.4-2.1-.7-3.3-1 0 .6.1.8.1 1.2-3.6-.3-6.4 1-9.7 2.1-1.5-.7-2.3 1-3.5 1.4-3.5-.8-3.7-3.3-4.9-5.3-.5-.9-1.8-1.5-2.9-2-.6-.3-1.6 0-2.3.2-.2.1.1 1 .1 1.6-.1 0-.4.1-.5 0-1.6-.9-3.3-.7-4.9-.1-1.7.6-3.2 1.5-4.8 2.2-3.1 1.2-8.5 4.6-11.9 2.6-.2-.1-.5-.3-.7-.5v.2c-.5-.7-.8-1.1-.9-1.2v-.1c-.3-.4-.6-.9-.9-1.3-.9.1-1.7.1-2.4.2 0-.1-.1-.3-.1-.4l2.1-.3c-.4-.4-.8-.8-1.4-1-.9-.3-2.3.7-3.4.4-1.2-.3-1.9-2-3-2.6-1.5-.8-4.1-.1-5.2-.8-.9-.6-1-2.2-1.7-2.6-1.4-1-.7-1.1-2.8-1.7-2.4-.6-6.4.5-8.9.7v.3c.4.2 1 .4 1.2.7s0 .8 0 1.1c-.5 0-1.1.1-1.4-.1-.8-.5-1.4-1.2-2.2-1.7-.1-.1-.5.1-.6.1.6.8 1.1 1.5 1.7 2.2l-.2.2-2-1c-1.3.8-2.4 1.6-3.7 2.4-.1-.4-.1-.7-.2-1.1-.7.1-1.4.1-2.2.2 0-.1-.1-.3-.1-.4 1.2-.3 2.5-.5 3.7-.8.1.1.1.2.2.3.2-.4.3-.8.6-1.3-2.8.5-5.4 1.1-8 1.4-1.5.2-3.1 0-4.6-.2-.8-.2-1.5-.9-2-1.6.6.1 1.1.3 1.7.4.1-.1.2-.3.3-.4-1.2-.7-2.4-1.3-3.5-2 .2-.1.4-.3.6-.4.4-.5.8-.9 1.4-1.6-1-.1-1.7-.2-2.3-.3.3-.5 1.1-1.4.8-1.6-.6-.6-1.7-.8-2.7-1.3l1-1c-3.8.3-7.4 0-10.6 1.8-2.1-1.6-4.1.3-6.8 0 1.2.8 2.1 1.4 2.9 1.9-3.5-.6-3.8-.9-3.6-2.1-1.8.3-2.8.7-4.6 1m122 30.5c-1.6.7-2.9 1.7-4.3 2.6-.3.2-.6.4-.8.4-2.1 0-4 .3-5.9.8h-3.5c6.3-2 12.6-4 19-6 .6-.2 1.3-.2 2-.4 0 .1.1.3.1.4-2.3.7-4.6 1.3-6.6 2.2zm930.1-21.6c.1-.4 0-1.3.4-1.4 1.2-.4 2.5-.4 3.7-.5.1 0 .2.7.3.9-1.5.3-2.8.6-4.4 1zm91.6 21.6c-1.6.7-2.9 1.7-4.3 2.6-.3.2-.6.4-.8.4-2.1 0-4 .3-5.9.8h-3.5c6.3-2 12.6-4 19-6 .6-.2 1.3-.2 2-.4 0 .1.1.3.1.4-2.3.7-4.5 1.3-6.6 2.2zm14.2-17h4c-.7.2-1.3.5-2 .7 1.1.9 2.2 1.8 3.2 2.6-2.6.1-2.6.1-5.2-3.3zm27.3-1.5c-1.9-1.7-1.9-1.8-.5-2.5.3.5.6 1.1 1.1 1.9 0 .1-.3.3-.6.6zm233.1-11.9h4c-.7.2-1.3.5-2 .7 1.1.9 2.2 1.8 3.2 2.6-2.6.1-2.6.1-5.2-3.3zm26.9-1.1c-1.9-1.7-1.9-1.8-.5-2.5.3.5.6 1.1 1.1 1.9 0 .1-.3.3-.6.6zm8.8-.5c-.2-.4-.4-.9-.6-1.4-.9-.1-1.6-.4-2.2-.8 2.7-.3 3.5.3 2.8 2.2zm3.9-.1h-2.4c-.8-1.3-.8-1.5 1-1.5-.4.2-.6.4-.7.6.8.2 1.5.4 2.2.6 0 .1-.1.2-.1.3zm64 9.3c-1.5-.5-2.9-.9-4.2-1.4 0-.1.1-.2.1-.3 1.3.2 2.6.4 4.1.6v1.1zm32.2 1c-.6-.2-1.1-.4-2.1-.9 1.4-.2 2.3-.4 3.3-.6.1.1.1.2.2.3-.5.5-.9.8-1.4 1.2zm65-20.2v-.2c1.3-.1 2.5-.3 4.2-.5 0 0 .2.4.3.7h-4.5zm18.5-1.4c.9-.4 1.9-.8 3.5-1.4-.3 1-.3 2-.7 2.1-.8.2-1.9 0-2.8-.1v-.6zm5.3 3.4c-1.6-.2-2.9-.5-4.1-.7v-.5c1.3-.4 2.6-.7 4.1-1.1v2.3zm9.9.6c-.7-.9-1.1-1.3-1.2-1.5.4-.7.6-1.2 1-1.9-2 .1-3.6.2-5.1.3 0-.2-.1-.4-.1-.5 2-.3 3.9-.6 6.2-.9-.3 1.7-.5 2.9-.8 4.5zm8.8-3.2h.1-.1zm0 0c-.6-.2-1.1-.4-1.5-.5-.3-.2-.6-.3-.9-.3-.1-.2-.3-.4-.4-.5 1-.2 2.3.1 3 1-.1.1-.1.2-.2.3zm27.8 8c.1-.4 0-1.3.4-1.4 1.2-.4 2.5-.4 3.7-.5.1 0 .2.7.3.9-1.6.3-2.9.6-4.4 1zm91.6 21.6c-1.6.7-2.9 1.7-4.3 2.6-.3.2-.6.4-.8.4-5 0-9.1 1.8-13.3 3.5-3.4 1.3-6.7 2.9-10.7 3.1l-.3-.3c1.5-.6 3-1.2 4.5-1.9l.3.3c.1-.5.2-.9.2-1.2.8-.1 1.4 0 2-.2 8.9-2.8 17.8-5.6 26.8-8.5.6-.2 1.3-.2 2-.4 0 .1.1.3.1.4-2.2.7-4.5 1.3-6.5 2.2zm14.8-17.3h4c-.7.2-1.3.5-2 .7 1.1.9 2.2 1.8 3.2 2.6-2.6.1-2.6.1-5.2-3.3zm26.7-1.2c-1.9-1.7-1.9-1.8-.5-2.5.3.5.6 1.1 1.1 1.9 0 .1-.3.3-.6.6zm12.8-.9h-2.4c-.8-1.4-.8-1.5 1.3-1.5-.5.3-.7.5-.9.7.8.2 1.5.4 2.2.6-.2 0-.2.1-.2.2zm64.5-6.3c-.4-.1-1.2-.1-1.3-.3-.4-.6-.6-1.4-.8-2.1.2-.1.5-.2.7-.2.6.5 1.3 1 1.7 1.5.1.2-.2.7-.3 1.1z'/%3E%3C/g%3E%3C/svg%3E");
            --divider-bottom-size: 1260px 100%;
            --divider-bottom-height: 62px;
            --divider-bottom-offset-x: 0px;
            --divider-bottom-color: #000000;
            --divider-top-layer-1-display: none;
            --divider-bottom-opacity: 1;
            --divider-bottom-flip: scale(1, 1);
            --divider-bottom-layers-pin-factor: 0;
            --divider-bottom-filter: none;
            --divider-bottom-layer-1-display: none;
            --divider-bottom-layer-2-display: none;
            --divider-bottom-layer-3-display: none;
            --firstChildMarginTop: -1px;
            --lastChildMarginBottom: -1px;
            --divider-top-layer-2-display: none;
            --items-direction: row;
        }

        #comp-llkj487l {
            --bg-overlay-color: transparent;
            --bg-gradient: none;
            width: 100%;
            --column-width: 980px;
            --column-flex: 980;
        }

        #comp-llkj487q {
            --direction: ltr;
            --justify-content: flex-start;
            --margin: -20px -20px;
            --item-margin: 20px 20px;
        }

        [id^="comp-llkj487y__"] {
            --bg-overlay-color: transparent;
            --bg-gradient: none;
            --scale: 1;
            border-width: 0 0 0 0;
            border-style: solid solid solid solid;
            border-color: rgba(0, 0, 0, 1) rgba(0, 0, 0, 1) rgba(0, 0, 0, 1) rgba(0, 0, 0, 1);
            border-radius: 0 0 0 0;
            overflow: hidden;
            transform: translateZ(0);
            margin: 0px;
        }

        [id="comp-llkj487y__item1"] {
            --bg-overlay-color: transparent;
            --bg-gradient: none;
            --scale: 1;
            border-width: 0 0 0 0;
            border-style: solid solid solid solid;
            border-color: rgba(0, 0, 0, 1) rgba(0, 0, 0, 1) rgba(0, 0, 0, 1) rgba(0, 0, 0, 1);
            border-radius: 0 0 0 0;
            overflow: hidden;
            transform: translateZ(0);
            margin: 0px;
        }
    </style>
@endsection
@section('content')
    <main id="PAGES_CONTAINER" class="PAGES_CONTAINER" tabindex="-1" data-main-content="true">
        <div id="SITE_PAGES" data-page-transition="OutIn" class="JshATs SITE_PAGES">
            <div id="SITE_PAGES_TRANSITION_GROUP" class="fcNEqv">
                <div id="webbb" class="dBAkHi webbb">
                    <div class="PFkO7r wixui-page" data-testid="page-bg"></div>
                    <div class="HT5ybB">
                        <div id="Containerwebbb" class="Containerwebbb SPY_vo">
                            <div data-mesh-id="ContainerwebbbinlineContent" data-testid="inline-content" class="">
                                <div data-mesh-id="ContainerwebbbinlineContent-gridContainer"
                                    data-testid="mesh-container-content">
                                    <section id="comp-llkj485x" tabindex="-1" class="Oqnisf comp-llkj485x wixui-section">
                                        <div id="bgLayers_comp-llkj485x" data-hook="bgLayers" class="MW5IWV">
                                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                            <div id="bgMedia_comp-llkj485x" class="VgO9Yg"></div>
                                        </div>
                                        <div data-mesh-id="comp-llkj485xinlineContent" data-testid="inline-content"
                                            class="">
                                            <div data-mesh-id="comp-llkj485xinlineContent-gridContainer"
                                                data-testid="mesh-container-content"></div>
                                        </div>
                                    </section>
                                    <section id="comp-llkj486o" tabindex="-1" class="Oqnisf comp-llkj486o wixui-section">
                                        <div id="bgLayers_comp-llkj486o" data-hook="bgLayers" class="MW5IWV">
                                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                            <div id="bgMedia_comp-llkj486o" class="VgO9Yg"></div>
                                        </div>
                                        <div data-mesh-id="comp-llkj486oinlineContent" data-testid="inline-content"
                                            class="">
                                            <div data-mesh-id="comp-llkj486oinlineContent-gridContainer"
                                                data-testid="mesh-container-content"></div>
                                        </div>
                                    </section>
                                    <section id="comp-llkj486u1" tabindex="-1" class="Oqnisf comp-llkj486u1 wixui-section">
                                        <div id="bgLayers_comp-llkj486u1" data-hook="bgLayers" class="MW5IWV">
                                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                            <div id="bgMedia_comp-llkj486u1" class="VgO9Yg"></div>
                                        </div>
                                        <div data-mesh-id="comp-llkj486u1inlineContent" data-testid="inline-content"
                                            class="">
                                            <div data-mesh-id="comp-llkj486u1inlineContent-gridContainer"
                                                data-testid="mesh-container-content">
                                                <section id="comp-llkj486z" class="comp-llkj486z CohWsy wixui-column-strip">
                                                    <div id="bgLayers_comp-llkj486z" data-hook="bgLayers" class="if7Vw2">
                                                        <div data-testid="colorUnderlay" class="tcElKx i1tH8h"></div>
                                                        <div id="bgMedia_comp-llkj486z" class="wG8dni"><wix-bg-image
                                                                id="bgImg_comp-llkj486z"
                                                                class="i1tH8h DXi4PB Yjj1af bgImage"
                                                                data-tiled-image-info="{&quot;containerId&quot;:&quot;comp-llkj486z&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;fittingType&quot;:&quot;tile&quot;,&quot;imageData&quot;:{&quot;width&quot;:176,&quot;height&quot;:176,&quot;uri&quot;:&quot;a554f2e31a98ac7ddde7be7d203844a5.png&quot;,&quot;displayMode&quot;:&quot;tile&quot;}}"
                                                                data-has-bg-scroll-effect="" data-bg-effect-name=""
                                                                style="background-image: url(&quot;https://static.wixstatic.com/media/a554f2e31a98ac7ddde7be7d203844a5.png/v1/crop/x_0,y_0,w_176,h_176,q_85,enc_auto/a554f2e31a98ac7ddde7be7d203844a5.png&quot;); background-size: auto; background-repeat: repeat; background-position: center center;"></wix-bg-image>
                                                        </div>
                                                    </div>
                                                    <div class="VXAmO2 UORcXs" data-testid="top-divider">
                                                        <div class="dy3w_9" data-testid="divider-layer-0"
                                                            data-divider-layer="0" style="--divider-layer-i: 0;"></div>
                                                    </div>
                                                    <div class="VXAmO2 Io4VUz" data-testid="bottom-divider">
                                                        <div class="dy3w_9" data-testid="divider-layer-0"
                                                            data-divider-layer="0" style="--divider-layer-i: 0;"></div>
                                                    </div>
                                                    <div data-testid="columns" class="V5AUxf">
                                                        <div id="comp-llkj487l"
                                                            class="comp-llkj487l YzqVVZ wixui-column-strip__column">
                                                            <div id="bgLayers_comp-llkj487l" data-hook="bgLayers"
                                                                class="MW5IWV">
                                                                <div data-testid="colorUnderlay" class="LWbAav Kv1aVt">
                                                                </div>
                                                                <div id="bgMedia_comp-llkj487l" class="VgO9Yg"></div>
                                                            </div>
                                                            <div data-mesh-id="comp-llkj487linlineContent"
                                                                data-testid="inline-content" class="">
                                                                <div data-mesh-id="comp-llkj487linlineContent-gridContainer"
                                                                    data-testid="mesh-container-content">
                                                                    <div id="comp-llkj487q"
                                                                        class=" comp-llkj487q wixui-repeater">
                                                                        <div role="list" class="E6jjcn">
                                                                            <div class="VM7gjN">
                                                                                <div role="listitem" class="Zc7IjY">
                                                                                    <div id="comp-llkj487y__item1"
                                                                                        class="comp-llkj487y YzqVVZ wixui-repeater__item">
                                                                                        <div id="bgLayers_comp-llkj487y__item1"
                                                                                            data-hook="bgLayers"
                                                                                            class="MW5IWV">
                                                                                            <div data-testid="colorUnderlay"
                                                                                                class="LWbAav Kv1aVt">
                                                                                            </div>
                                                                                            <div id="bgMedia_comp-llkj487y__item1"
                                                                                                class="VgO9Yg"></div>
                                                                                        </div>
                                                                                        <div data-mesh-id="comp-llkj487y__item1inlineContent"
                                                                                            data-testid="inline-content"
                                                                                            class="">
                                                                                            <div data-mesh-id="comp-llkj487y__item1inlineContent-gridContainer"
                                                                                                data-testid="mesh-container-content">
                                                                                                <div id="comp-llkj48861__item1"
                                                                                                    class="KcpHeO tz5f0K comp-llkj48861 wixui-rich-text"
                                                                                                    data-testid="richTextElement">
                                                                                                    <h2 class="font_5 wixui-rich-text__text"
                                                                                                        style="line-height:normal; text-align:center; font-size:18px;">
                                                                                                        <span
                                                                                                            style="font-family:enriqueta,serif; font-size:38px; font-weight:bold;"
                                                                                                            class="wixui-rich-text__text">So
                                                                                                            What Are These
                                                                                                            Skill
                                                                                                            Levels?</span>
                                                                                                    </h2>
                                                                                                </div>
                                                                                                <div id="comp-llkj488i__item1"
                                                                                                    class="KcpHeO tz5f0K comp-llkj488i wixui-rich-text"
                                                                                                    data-testid="richTextElement">
                                                                                                    <p class="font_8 wixui-rich-text__text"
                                                                                                        style="line-height:1.8em; font-size:16px;">
                                                                                                        <span
                                                                                                            style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                                            class="wixui-rich-text__text">Let's
                                                                                                            say you're a
                                                                                                            musician. Or you
                                                                                                            do anything
                                                                                                            creative,
                                                                                                            really.</span>
                                                                                                    </p>

                                                                                                    <p class="font_8 wixui-rich-text__text"
                                                                                                        style="line-height:1.8em; font-size:16px;">
                                                                                                        <span
                                                                                                            style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                                            class="wixui-rich-text__text">How
                                                                                                            do you tell the
                                                                                                            world your
                                                                                                            degree of skill?
                                                                                                            Score 1 thru
                                                                                                            10?</span></p>

                                                                                                    <p class="font_8 wixui-rich-text__text"
                                                                                                        style="line-height:1.8em; font-size:16px;">
                                                                                                        <span
                                                                                                            style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                                            class="wixui-rich-text__text">Pick
                                                                                                            some number of
                                                                                                            stars? Well,
                                                                                                            here at Lam
                                                                                                            Jones, we break
                                                                                                            down your
                                                                                                            proficiency into
                                                                                                            three
                                                                                                            categories:</span>
                                                                                                    </p>

                                                                                                    <p class="font_8 wixui-rich-text__text"
                                                                                                        style="font-size:17px; line-height:1.8em;">
                                                                                                        &nbsp;</p>

                                                                                                    <p class="font_8 wixui-rich-text__text"
                                                                                                        style="font-size:17px; line-height:1.8em;">
                                                                                                        <span
                                                                                                            class="inherit-font-size wixui-rich-text__text"
                                                                                                            style="font-size:16px;"><span
                                                                                                                class="wixGuard wixui-rich-text__text">​</span></span>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="comp-llkj489a1"
                                                                        class="MazNVa comp-llkj489a1 wixui-image"
                                                                        title="Headphone Explosion.jpg">
                                                                        <div data-testid="linkElement" class="j7pOnl">
                                                                            <wow-image id="img_comp-llkj489a1"
                                                                                class="HlRz5e BI8PVQ"
                                                                                data-image-info="{&quot;containerId&quot;:&quot;comp-llkj489a1&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:98,&quot;targetHeight&quot;:100,&quot;isLQIP&quot;:false,&quot;imageData&quot;:{&quot;width&quot;:1500,&quot;height&quot;:1528,&quot;uri&quot;:&quot;95c157_f4aa341ab2354bb9baae6ddf61e35fe2~mv2.png&quot;,&quot;name&quot;:&quot;Illus Exploding Headphones.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}"
                                                                                data-bg-effect-name="" data-has-ssr-src=""
                                                                                data-src="https://static.wixstatic.com/media/95c157_f4aa341ab2354bb9baae6ddf61e35fe2~mv2.png/v1/fill/w_98,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Illus%20Exploding%20Headphones.png"><img
                                                                                    src="https://static.wixstatic.com/media/95c157_f4aa341ab2354bb9baae6ddf61e35fe2~mv2.png/v1/fill/w_98,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Illus%20Exploding%20Headphones.png"
                                                                                    alt="Illus Exploding Headphones.png"
                                                                                    width="98" height="100"
                                                                                    srcset="https://static.wixstatic.com/media/95c157_f4aa341ab2354bb9baae6ddf61e35fe2~mv2.png/v1/fill/w_98,h_100,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Illus%20Exploding%20Headphones.png 1x, https://static.wixstatic.com/media/95c157_f4aa341ab2354bb9baae6ddf61e35fe2~mv2.png/v1/fill/w_196,h_200,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Illus%20Exploding%20Headphones.png 2x"
                                                                                    fetchpriority="high"
                                                                                    style="width: 98px; height: 100px; object-fit: cover;"></wow-image>
                                                                        </div>
                                                                    </div>
                                                                    <div id="comp-llkj489c2"
                                                                        class="MazNVa comp-llkj489c2 wixui-image"
                                                                        title="Headphone Explosion.jpg">
                                                                        <div data-testid="linkElement" class="j7pOnl">
                                                                            <wow-image id="img_comp-llkj489c2"
                                                                                class="HlRz5e BI8PVQ"
                                                                                data-image-info="{&quot;containerId&quot;:&quot;comp-llkj489c2&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:237,&quot;targetHeight&quot;:111,&quot;isLQIP&quot;:false,&quot;imageData&quot;:{&quot;width&quot;:988,&quot;height&quot;:462,&quot;uri&quot;:&quot;95c157_62f84e5f3a3c4883af3030d80d7ea731~mv2.png&quot;,&quot;name&quot;:&quot;Illus Lam Jones Logo.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}"
                                                                                data-bg-effect-name="" data-has-ssr-src=""
                                                                                data-src="https://static.wixstatic.com/media/95c157_62f84e5f3a3c4883af3030d80d7ea731~mv2.png/v1/fill/w_237,h_111,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Illus%20Lam%20Jones%20Logo.png"><img
                                                                                    src="https://static.wixstatic.com/media/95c157_62f84e5f3a3c4883af3030d80d7ea731~mv2.png/v1/fill/w_237,h_111,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Illus%20Lam%20Jones%20Logo.png"
                                                                                    alt="Illus Lam Jones Logo.png"
                                                                                    width="237" height="111"
                                                                                    srcset="https://static.wixstatic.com/media/95c157_62f84e5f3a3c4883af3030d80d7ea731~mv2.png/v1/fill/w_237,h_111,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Illus%20Lam%20Jones%20Logo.png 1x, https://static.wixstatic.com/media/95c157_62f84e5f3a3c4883af3030d80d7ea731~mv2.png/v1/fill/w_474,h_222,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Illus%20Lam%20Jones%20Logo.png 2x"
                                                                                    fetchpriority="high"
                                                                                    style="width: 237px; height: 111px; object-fit: cover;"></wow-image>
                                                                        </div>
                                                                    </div>
                                                                    <div class="jtGA1H comp-llkj489f1" id="comp-llkj489f1"
                                                                        role="button" tabindex="0"
                                                                        aria-disabled="false">
                                                                        <div data-testid="linkElement"
                                                                            class="o6Oevi wixui-button zKbzSQ"
                                                                            aria-disabled="false">
                                                                            <div class="sdBsNc"></div>
                                                                            <div class="Nd49ob D6oBUw"></div>
                                                                            <div class="G0CATF D6oBUw"></div>
                                                                            <div class="MPoHxk D6oBUw"></div>
                                                                            <div class="wniW9e D6oBUw"></div><span
                                                                                class="pzGjQu wixui-button__label">Radio
                                                                                Ready</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="jtGA1H comp-llkj489j1" id="comp-llkj489j1"
                                                                        role="button" tabindex="0"
                                                                        aria-disabled="false" data-angle="0"
                                                                        data-angle-style-location="style"
                                                                        data-screen-in-hide="done"
                                                                        style="visibility: inherit;">
                                                                        <div data-testid="linkElement"
                                                                            class="o6Oevi wixui-button zKbzSQ"
                                                                            aria-disabled="false">
                                                                            <div class="sdBsNc"></div>
                                                                            <div class="Nd49ob D6oBUw"></div>
                                                                            <div class="G0CATF D6oBUw"></div>
                                                                            <div class="MPoHxk D6oBUw"></div>
                                                                            <div class="wniW9e D6oBUw"></div><span
                                                                                class="pzGjQu wixui-button__label">Collaborator</span>
                                                                        </div>
                                                                    </div>
                                                                    <div id="comp-llkjuoxk2"
                                                                        class="KcpHeO tz5f0K comp-llkjuoxk2 wixui-rich-text"
                                                                        data-testid="richTextElement">
                                                                        <p class="font_8 wixui-rich-text__text"
                                                                            style="line-height:1.8em; font-size:16px;">
                                                                            <span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">The goal here
                                                                                is to make fully professionally sounding
                                                                                music. This</span></p>

                                                                        <p class="font_8 wixui-rich-text__text"
                                                                            style="line-height:1.8em; font-size:16px;">
                                                                            <span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">is the tier
                                                                                for skilled musicians looking for other
                                                                                skilled musicians.</span></p>

                                                                        <p class="font_8 wixui-rich-text__text"
                                                                            style="line-height:1.8em; font-size:16px;">
                                                                            <span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">Your
                                                                                production quality is high, and you nail
                                                                                pretty much every take. We would call
                                                                                you&nbsp;</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px; font-style:italic;"
                                                                                class="wixui-rich-text__text">RADIO
                                                                                READY</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">.</span></p>

                                                                        <p class="font_8 wixui-rich-text__text"
                                                                            style="font-size:17px; line-height:1.8em;">
                                                                            <span style="font-size:17px;"
                                                                                class="wixui-rich-text__text"><span
                                                                                    style="font-family:barlow-medium,barlow,sans-serif;"
                                                                                    class="wixui-rich-text__text"><span
                                                                                        class="wixGuard wixui-rich-text__text">​</span></span></span>
                                                                        </p>

                                                                        <p class="font_8 wixui-rich-text__text"
                                                                            style="line-height:1.8em; font-size:16px;">
                                                                            <span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">This tier
                                                                                takes a little of the pressure off. It is
                                                                                for anyone who is still</span></p>

                                                                        <p class="font_8 wixui-rich-text__text"
                                                                            style="line-height:1.8em; font-size:16px;">
                                                                            <span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">in the
                                                                                "feeling it out" stage, or who wants to
                                                                                experiment a bit more. Where the project
                                                                                goes is totally up to the
                                                                                creator,&nbsp;</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">and&nbsp;</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">the</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">&nbsp;other
                                                                                &nbsp;</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px; font-style:italic;"
                                                                                class="wixui-rich-text__text">COLLABORATORS
                                                                                involved.</span></p>

                                                                        <p class="font_8 wixui-rich-text__text"
                                                                            style="font-size:17px; line-height:1.8em;">
                                                                            <span style="font-size:17px;"
                                                                                class="wixui-rich-text__text"><span
                                                                                    style="font-family:barlow-medium,barlow,sans-serif;"
                                                                                    class="wixui-rich-text__text"><span
                                                                                        class="wixGuard wixui-rich-text__text">​</span></span></span>
                                                                        </p>

                                                                        <p class="font_8 wixui-rich-text__text"
                                                                            style="line-height:1.8em; font-size:16px;">
                                                                            <span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">This tier is
                                                                                for people who are just getting started. A
                                                                            </span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text"><span
                                                                                    style="font-style:italic;"
                                                                                    class="wixui-rich-text__text">NEWBIE</span></span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text"> project can
                                                                                still end up a hit, but it lets everyone
                                                                                involved understand that this is a place
                                                                                where&nbsp;</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">people&nbsp;</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">with&nbsp;</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">less&nbsp;</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">musical&nbsp;</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">proficiency</span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text"> </span><span
                                                                                style="font-family:barlow-medium,barlow,sans-serif; font-size:17px;"
                                                                                class="wixui-rich-text__text">can still get
                                                                                involved, join up with other people, and
                                                                                have fun making music.</span></p>
                                                                    </div>
                                                                    <div class="jtGA1H comp-llkj489m1" id="comp-llkj489m1"
                                                                        role="button" tabindex="0"
                                                                        aria-disabled="false" data-angle="0"
                                                                        data-angle-style-location="style">
                                                                        <div data-testid="linkElement"
                                                                            class="o6Oevi wixui-button zKbzSQ"
                                                                            aria-disabled="false">
                                                                            <div class="sdBsNc"></div>
                                                                            <div class="Nd49ob D6oBUw"></div>
                                                                            <div class="G0CATF D6oBUw"></div>
                                                                            <div class="MPoHxk D6oBUw"></div>
                                                                            <div class="wniW9e D6oBUw"></div><span
                                                                                class="pzGjQu wixui-button__label">Newbie</span>
                                                                        </div>
                                                                    </div>
                                                                    <div data-mesh-id="comp-llkj487linlineContent-wedge-4">
                                                                    </div>
                                                                    <div data-mesh-id="comp-llkj487linlineContent-wedge-6">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div>
                                                </section>
    </main>
@endsection
