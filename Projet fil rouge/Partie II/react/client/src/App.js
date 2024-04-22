import React, { useState, useEffect } from 'react'; 
import './App.css'; 
 
function App() { 
  const [logs, setLogs] = useState([]); 
 
  useEffect(() => { 
    fetch('http://localhost:3000/logs') 
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        console.log(data);
        setLogs(data);
      }) 
      .catch(err => console.error("Error fetching data: ", err)); 
  }, []); 
 
  return ( 
    <div className="App"> 
      <h1>Items from MongoDB</h1> 
      <ul> 
        {logs.map(log => (
          <li key={log._id}>
            Logger: {log.loggerName}, Message: {log.message}
            <br />
            Data:
            {log.data.map((dataItem, index) => (
              <div key={index}>
                {JSON.parse(dataItem).id_ope} - {JSON.parse(dataItem).type} - {JSON.parse(dataItem).price}
              </div>
            ))}
          </li> 
        ))} 
      </ul> 
    </div> 
  ); 
} 
 
export default App;