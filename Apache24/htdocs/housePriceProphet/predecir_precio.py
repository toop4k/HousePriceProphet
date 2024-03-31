import sys
import joblib

def predecir_precio(banos, m2_edificados, dormitorios, garajes, plantas, condominio, tipo_Casa, tipo_Departamento, zona_Centro, zona_Ciudadelas, zona_Doble_via_la_guardia, zona_Equipetrol, zona_Este, zona_Hamacas, zona_Las_palmas, zona_Norte, zona_Oeste, zona_Polanco, zona_Remanso, zona_Sur, zona_Urbari, zona_Urubó, estado_A_estrenar, estado_A_reciclar, estado_Buen_estado, estado_En_Pozo, estado_En_construcción, estado_Excelente_estado, estado_Requiere_mantenimiento, estado_Sin_Definir):
    # Cargar el modelo entrenado desde el archivo .pkl
    model = joblib.load('modelo_entrenado.pkl')
    # Realizar la predicción
    ejemplo = [[banos, m2_edificados, dormitorios, garajes, plantas, condominio, tipo_Casa, tipo_Departamento, zona_Centro, zona_Ciudadelas, zona_Doble_via_la_guardia, zona_Equipetrol, zona_Este, zona_Hamacas, zona_Las_palmas, zona_Norte, zona_Oeste, zona_Polanco, zona_Remanso, zona_Sur, zona_Urbari, zona_Urubó, estado_A_estrenar, estado_A_reciclar, estado_Buen_estado, estado_En_Pozo, estado_En_construcción, estado_Excelente_estado, estado_Requiere_mantenimiento, estado_Sin_Definir]]
    precio_predicho = model.predict(ejemplo)
    return precio_predicho[0]

if __name__ == '__main__':
    # Obtener los argumentos de línea de comandos
    banos = float(sys.argv[1])
    m2_edificados = float(sys.argv[2])
    dormitorios = float(sys.argv[3])
    garajes = float(sys.argv[4])
    plantas = float(sys.argv[5])
    condominio = float(sys.argv[6])
    tipo_Casa = float(sys.argv[7])
    tipo_Departamento = float(sys.argv[8])
    zona_Centro = float(sys.argv[9])
    zona_Ciudadelas = float(sys.argv[10])
    zona_Doble_via_la_guardia = float(sys.argv[11])
    zona_Equipetrol = float(sys.argv[12])
    zona_Este = float(sys.argv[13])
    zona_Hamacas = float(sys.argv[14])
    zona_Las_palmas = float(sys.argv[15])
    zona_Norte = float(sys.argv[16])
    zona_Oeste = float(sys.argv[17])
    zona_Polanco = float(sys.argv[18])
    zona_Remanso = float(sys.argv[19])
    zona_Sur = float(sys.argv[20])
    zona_Urbari = float(sys.argv[21])
    zona_Urubó = float(sys.argv[22])
    estado_A_estrenar = float(sys.argv[23])
    estado_A_reciclar = float(sys.argv[24])
    estado_Buen_estado = float(sys.argv[25])
    estado_En_Pozo = float(sys.argv[26])
    estado_En_construcción = float(sys.argv[27])
    estado_Excelente_estado = float(sys.argv[28])
    estado_Requiere_mantenimiento = float(sys.argv[29])
    estado_Sin_Definir = float(sys.argv[30])

    # Realizar la predicción y mostrar el resultado
    resultado_prediccion = predecir_precio(banos, m2_edificados, dormitorios, garajes, plantas, condominio, tipo_Casa, tipo_Departamento, zona_Centro, zona_Ciudadelas, zona_Doble_via_la_guardia, zona_Equipetrol, zona_Este, zona_Hamacas, zona_Las_palmas, zona_Norte, zona_Oeste, zona_Polanco, zona_Remanso, zona_Sur, zona_Urbari, zona_Urubó, estado_A_estrenar, estado_A_reciclar, estado_Buen_estado, estado_En_Pozo, estado_En_construcción, estado_Excelente_estado, estado_Requiere_mantenimiento, estado_Sin_Definir)
    print(resultado_prediccion)

