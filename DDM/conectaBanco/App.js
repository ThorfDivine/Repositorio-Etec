import React, {useState} from 'react';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View, Button, TextInput } from 'react-native';
import { Header } from 'react-native/Libraries/NewAppScreen';

export default function App() {
  const[nome, atualizaNome] = useState(' ');
  const[gmail, atualizaGmail] = useState(' ');
  const[senha, atualizaSenha] = useState(' ');

  const gravar = () =>{
    fetch(
      'http://10.68.68.34:80/RICARDÃO(GBOS)/Repositorio-Etec-/SW 1/teste/conectando no banco de dados/gravar_react.php',{ //local do arquivo php || muda de acordo
        method: 'post', //metodo
        Header:{//descrição de oq vai levar é a "etiqueta"
          'Accept':'application/json', // oq precisa aceitar
          'Content-type':'application/json'//oq tem dentro
        },
        body:
          JSON.stringify({
            valor_nome: nome, //varia de acordo com a quantidade de valores
            valor_gmail: gmail,
            valor_senha: senha
          })})   //converte o que tem dentro para json
          .then(
            (response) => { // nome padrão, recebe a resposta do php
              response.json();
            }
          )
          .then(
            (responseJson)=>{// resdposta doi json
              alert(responseJson);
            }
          )
          .catch(
            (error)=>{
              alert(error);
            })//verifica se tem erro;
        ;
      
  }

  return (
    <View style={styles.container}>
      <Text>App de integração React + php + MySQL</Text>
      <Text>Nome: </Text>
      <TextInput style={styles.caixa} onChangeText={atualizaNome}></TextInput>
      <Text>Gmail: </Text>
      <TextInput style={styles.caixa} onChangeText={atualizaGmail}></TextInput>
      <Text>Senha: </Text>
      <TextInput style={styles.caixa} onChangeText={atualizaSenha}></TextInput>
      <Button onPress={gravar} title='Gravar'/>
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
  caixa: {
    width: 200,
    height: 40,
    borderColor: "black",
    backgroundColor: "rgb(100, 150, 100)",
    borderWidth: 1,
  },
});
