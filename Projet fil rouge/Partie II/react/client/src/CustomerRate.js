import React, { useState, useEffect } from 'react';
import './App.css';

const CustomerRate = () => {
    let [nbUsers, setNbUsers] = useState(null);
    let [NbCustomers, setNbCustomers] = useState(null);

    useEffect(() => {
        fetch('http://localhost:3000/logs/customers') // Request to the /customers endpoint
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                setNbUsers(data.NbUsers);
                setNbCustomers(data.NbCustomers);
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