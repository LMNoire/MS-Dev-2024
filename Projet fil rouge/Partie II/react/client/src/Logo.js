import React from 'react';

const Logo = ({ src, alt }) => {
    return (
        <img src={src} alt={alt} className='Logo'/>
    );
};

export default Logo;