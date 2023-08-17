import { Pressable, View, Text, StyleSheet } from "react-native";

export default function Butaum({miniTxt}){
    <View style={quico.bolaQuadrada}>
        <Pressable style={quico.gentalha}>
            <Text style={quico.VouContar}>{miniTxt}</Text>
        </Pressable>
    </View>
}

const quico = StyleSheet.create({
        bolaQuadrada:{
            width:320,
            height:68,
            MarginHorizontal:20,
            alignItems:'center',
            justifyContend: 'center',
            padding:3,
        },
        gentalha:{
            borderRadius:10,
            width: '100%',
            height:'100%',
            flexDirection:'row',
        },
        VouContar:{
            color: '#f0000',
            fontSize: 16,
        },
});