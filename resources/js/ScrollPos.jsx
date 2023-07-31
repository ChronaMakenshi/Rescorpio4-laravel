import React from 'react';
import { useEffect, useState } from "react";
import ReactDOM from 'react-dom';
import logo from '/storage/app/public/image/fleche.svg';

export default function ScrollPos() {

    const [showPos, setShowPos] = useState(false);
    const scrollToTop = () => {
        window.scrollTo({
            top: 0,
            behavior: 'auto'
        });
    };

    useEffect(() => {

        window.addEventListener("scroll", () => {
            if (window.pageYOffset && window.scrollY) {
                setShowPos('10px');
            } else {
                setShowPos('-55px');
            }
        })

        const interval = setInterval(() => {
            setShowPos('-55px');
        }, 10000);

        return () => clearInterval(interval);
    })

    return (
        <>
            {showPos && (
                <div id="returnToHeader" className="fixed z-20 max-lg:hidden" onClick={scrollToTop}  style={{ right : showPos }}>
                    <img alt="start" vrel="preload" src={logo} />
                </div>
            )}
        </>
    );
}

if (document.getElementById('ScrollPos')) {
    ReactDOM.render(<ScrollPos/>, document.getElementById('ScrollPos'));
}