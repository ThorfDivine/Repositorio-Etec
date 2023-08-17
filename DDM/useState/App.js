import { StatusBar} from 'expo-status-bar';

import { useState } from 'react';

import { StyleSheet, Text, View, Pressable, TextInput, Button } from 'react-native';

import Figura from './Figura.js';
 

export default function App() {

 

  const [Contador, atualizaContador] = useState(0);
  const [n1, atualizaN1] = useState(0);
  const [n2, atualizaN2] = useState(0);
  const [resul, atualizaResul] = useState(0);
  const somar = () => {
    atualizaResul(parseInt(n1) + parseInt(n2))
  }

  return (

    <View style={styles.container}>

      <Text style={styles.title}>Trabalhando com State: </Text>

      <Text style={styles.Text}>Clique nos botões!</Text>

      <Pressable style={styles.Button} onPress={()=>atualizaContador(Contador+1,)}><Text style={styles.textButton}> ADICIONAR 1 </Text></Pressable>
      
      <View style={styles.pulalinha}></View>

      <Pressable style={styles.Button} onPress={()=>atualizaContador(Contador-1,)}><Text style={styles.textButton}> REMOVER 1 </Text></Pressable>

      <View style={styles.pulalinha}></View>

      <Pressable style={styles.Button} onPress={()=>atualizaContador(Contador-Contador,)}><Text style={styles.textButton}> ZERAR </Text></Pressable>

      <Text style={styles.resp1}>Você clicou {Contador} vezes!</Text>

      <View style={styles.pulalinha}></View>

      <Text style={styles.Text}>---Exemplo com inputs---</Text>

      <View style={styles.pulalinha}></View>

      <Text>digite o primeiro numero: {n1}</Text>

      <Figura funcaoPRoda={atualizaN1}/>

      <Text>digite o segundo numero: {n2} </Text>

      <Figura  funcaoPRoda={atualizaN2}/>

      <Button title="somar valores" onPress={somar}/>

      <Text>o resultado foi de: {resul}</Text>

      <TextInput />

      <StatusBar style="auto" />

    </View>

  );

}

 

const styles = StyleSheet.create({

  container: {

    flex: 1,

    backgroundColor: 'rgb(264,254,244)',

    alignItems: 'center',

    justifyContent: 'center',

  },

  title:{
    
    fontSize: 25

  },

  Text:{

    color: 'rgb(25,25,25)',

    fontSize: 16 ,

  },

  textButton:{

    color: 'rgb(255,255,255)',

    fontSize: 16,

    marginBottom: "10px",

    marginTop: "10px",

    marginLeft: 25

  },

  Button:{
    
    backgroundColor: 'rgb(26,110,110)',

    alignContent: 'center',

    justifyContent: 'center',

    marginTop: "10px",

    marginBottom: "10px",

    width: 150,

    height: 40,

  },

  resp1:{

    fontSize: 16,

    color: 'blue',

    display: 'flex'

  },

  pulalinha:{

    height: 5,

    width: "1px"
  },
  
  input:{

    height: 25,

    width: 150,

    margin: 5,

    backgroundColor: "rgb(180,180,180)"
  }

});