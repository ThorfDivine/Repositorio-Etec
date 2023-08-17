import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';
import Figura from './Figura.js';

const vinland = require('./assets/vinland.png');

export default function App() {
  return (
    <View style={styles.container}>
      <View style={styles.container2}>
        <Text style={styles.title}>Vinland Saga</Text>
        <Figura FontImg={vinland}/> 
        <StatusBar style="auto" />
        <View >
          <Text style={styles.paragrafo}>A história de Vinland Saga começa 15 anos antes, quando o comandante viking Thors decide desertar batalha para viver uma vida de paz na Islândia ao lado de sua esposa Helga. Tempos depois, seu filho Thorfinn deseja conhecer o paraíso conhecido como Vinland. Quando Thors é convocado para mais uma batalha, o antigo guerreiro é encurralado em uma armadilha para pagar por ter desertado tantos anos antes. Quando o plano é posto em ação, em meio a confusão, Thorfinn é feito refém e seu pai acaba morto. Thorfinn se vê obrigado a unir-se aos seus sequestradores. Contudo, Thorfinn jura vingança em nome do pai e constantemente desafia seus superiores para batalhas. Em Breve, Thorfinn e o grupo de mercenários comandados por Askeladd darão início à lendária invasão Dinamarquesa em Londres. </Text>
        </View>
      </View>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#a2a2a2',
    alignItems: 'center',
    justifyContent: 'center',
  },
  container2: {
    flex: 1,
    backgroundColor: '#000',
    alignItems: 'center',
    width: 340,
    justifyContent: 'center',
  },
  title:{
    fontSize: 30,
    fontWeight: "bold",
    color: "#fff",
  },
  paragrafo:{
    width: 300,
    color: "#fff",
    textAlign: "justify",
    fontSize: 15,
  },
});
