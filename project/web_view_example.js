/*const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');

const connection = mysql.createPool({
   host : 'localhost',
   user : 'root',
   password : '',
   database : 'Form'
});

const app = express();
app.get('/registration', function(req, res){
   connction.getConnection(function(err, connection){
      connection.query('SELECT * FROM registration', function(error, results,fields){
         if(error) throw error;
         res.send(results)
      });
   });  
});

app.listen(3000, () =>{
   console.log('Go to http://localhost/reg/index.php');
});

test(){
   fetch('http://localhost/reg/index.php')
   .then(response => response.json())
   .then(registration => console.warn(registration))
}*/





import React, { Component } from 'react'
import { View, WebView, StyleSheet }

from 'react-native'
const WebViewExample = () => {
   return (
      <View style = {styles.container}>
         <WebView
         source = {{ uri:
         'http:/192.168.0.188/reg/index.php' }}
         />
      </View>
   )
}
export default WebViewExample;

const styles = StyleSheet.create({
   container: {
      height: 700,
      
   }
})