import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View, Image} from 'react-native';
import Visualizador from './Visualizador.js';
import {Colors} from 'react-native/Libraries/NewAppScreen';
import Butaum from './Butao.js';

const OP = require('./assets/OP.jpg');
const agend = require('./assets/agend-e.png');


export default function App() {
  return (
      <View style={styles.pai}>
      <View style={styles.android}></View>

      <View style={styles.header}>
      <Visualizador FontImg={agend}/> 
      </View>
      <Butaum miniTxt = 'Tia Maria' />
      <Text style={styles.texto.a}>Hello World! Meu Primeiro App!  agend!</Text>
      <Image style={styles.OP} source={OP}/>
      <Text style={styles.texto.b}>Minha segunda frase de app</Text>
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  android:{
    width:413,
    height: 30,
    backgroundColor: "RGB(255, 255, 255)",
  },
  pai: {
    flex: 1,
    backgroundColor: 'rgb(0,0,0)',
    //alignItems: 'center',
    //justifyContent: 'space-evenly',
  },
  header:{

  },
  texto:{
    a:{
    color:'rgb(255,255,255)' ,
    fontSize: 30,
    },
    b:{
    color:'rgb(50,50,50)',
    fontSize: 30,
    },
    
  },
  OP:{
    height: 300,
    width: 350,
  },
 
});
