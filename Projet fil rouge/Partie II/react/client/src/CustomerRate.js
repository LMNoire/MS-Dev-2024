import React, { useState, useEffect } from 'react';
import './App.css';

var CustomerRate = () => {
    var [nbUsers, setNbUsers] = useState(null);
    var [NbCustomers, setNbCustomers] = useState(null);

    useEffect(() => {
        fetch('http://localhost:3000/logs')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Extract the count of registered users from the array of logs
                var userCount = data.length;
                var customerCount = data.length;
                setNbUsers(userCount);
                setNbCustomers(customerCount);
            })
            .catch(err => console.error("Error fetching data: ", err));
    }, []);

    return (
        <div className="CustomerRate">
            <h2>Number of Registered Users:</h2>
            {nbUsers !== null ? (
                <p>{nbUsers}</p>
            ) : (
                <p>Loading...</p>
            )}
            <h2>Number of Customers:</h2>
            {NbCustomers !== null ? (
                <p>{NbCustomers}</p>
            ) : (
                <p>Loading...</p>
            )}
        </div>
    );
};

export default CustomerRate;